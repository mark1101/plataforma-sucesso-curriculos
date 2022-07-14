<?php

namespace App\Http\Controllers\MercadoPago;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCurriculumQuantity;
use App\Models\CompanyPlan;
use App\Models\CompanyPlanRelation;
use App\Models\NfsControl;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use stdClass;

class CompanyPaymentController extends Controller
{
    public function returnCart($plan_id)
    {
        $plan = CompanyPlan::where('id', $plan_id)->first();
        $company = Company::where('user_id', Auth::id())->first();
        $planRelation = CompanyPlanRelation::where('company_id', $company->id)->first();
        $companyQuantity = CompanyCurriculumQuantity::where('company_id', $company->id)->first();

        if ($planRelation) {
            if ($plan->type != $planRelation->type && $companyQuantity->quantity == 0) {
                return view('Company.cart', [
                    'plan' => $plan
                ]);
            } else {
                return view('Company.error-plan-on', [
                    'message' => 'Erro ao tentar alterar seu plano, verifique se teus créditos grátis tenham acabado, ou entre 
                    em contato conosco'
                ]);
            }
        }
    }

    public function pay(Request $request)
    {
        $payment_id = $request->get('payment_id');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/' . $payment_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Authorization: Bearer APP_USR-8029478245666882-071110-39788d2e54fe7884ba7744e6cbaf7523-1150003921';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $result = json_decode($result);
        }
        curl_close($ch);
        $status = $request->status;
        if ($status == 'approved') {
            $plan = CompanyPlan::where('name', $result->additional_info->items[0]->title)->first();
            $plan = $plan->id;

            $company = Company::where('user_id', Auth::user()->id)->first();
            $companyPlan = CompanyPlanRelation::where('company_id', $company->id)
                ->with(['plan'])
                ->first();

            $planRequest = CompanyPlan::where('id', $plan)->first();
            $credit = CompanyCurriculumQuantity::where('company_id', $company->id)->first();
            $sum = $planRequest->quantity + $credit->quantity;

            if ($planRequest->type != $companyPlan->plan->type) {
                if ($credit->quantity != 0) {
                    return response()->json([
                        'message' => 'Os planos possuem tipos diferentes de qualificações,
                    você precisa gastar seus créditos atuais para alterar o plano!',
                        'status' => 'error'
                    ], 201);
                }
            }

            $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
                'plan_id' => $plan
            ]);

            if ($alterPlan) {
                if ($this->addCredit($company->id, $sum)) {
                    return response()->json([
                        'message' => 'Seu pagamento foi aprovado, plano alterado e crédito adicionado a sua conta!',
                        'status' => 'success'
                    ], 201);
                } else {
                    $alterPlan = CompanyPlanRelation::where('company_id', $company->id)->update([
                        'plan_id' => $companyPlan->plan_id
                    ]);
                    return response()->json([
                        'message' => 'Erro ao concluir sua requisição, tente novamente mais tarde!',
                        'status' => 'success'
                    ], 201);
                }
            } else {
                return response()->json([
                    'message' => 'Erro ao validar seu pagamento',
                    'status' => 'error'
                ], 201);
            }
        }
    }

    public function addCredit($companyId, $sum)
    {
        $addCredit = CompanyCurriculumQuantity::where('company_id', $companyId)->update([
            'quantity' => $sum
        ]);
        if ($addCredit) {
            return true;
        } else {
            return false;
        }
    }

    public function peding(Request $request)
    {
    }

    public function createNfs(Request $request, $payment_id)
    {
        if (NfsControl::where('payment_id', $payment_id)->exists()) {
            $nfs = NfsControl::where('payment_id', $payment_id)->first();
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer' . config('app.nfs_token'),
            ])
                ->get('https://api.webmaniabr.com/2/nfse/consulta', [
                    'uuid' => $nfs->uuid
                ])
                ->json();
            return $response;
        }

        $payment = Payments::where('id', $payment_id)->first();
        $myarray = array(
            "ambiente" => 2,
            "reps" => [array(
                "natureza_operacao" => 3,
                "servico" => array(
                    "valor_servicos" => (string) $payment->price,
                    "codigo_cnae" => "69.20-6-01",
                    "codigo_servico" => "21719",
                    "discriminacao" => "Prestação de Serviço referente ao plano" . $payment->product,
                    "impostos" => array(
                        "iss" => "2.01",
                        "pis" => "0.00",
                        "cofins" => "0.00",
                        "csll" => "0.00",
                        "ir" => "0.00",
                        "inss" => "0.00"
                    )
                ),
                "tomador" => array(
                    "cnpj" => "00.000.000/0000-00",
                    "razao_social" => "Empresa 1",
                    "endereco" => "Av. Brg. Faria Lima",
                    "complemento" => "Escritório",
                    "numero" => 1000,
                    "bairro" => "Itaim Bibi",
                    "cidade" => "São Paulo",
                    "uf" => "SP",
                    "cep" => "00000-000",
                    "telefone" => "(00) 0000-0000",
                    "email" => "nome@email.com"
                )
            )],
        );

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer' . config('app.nfs_token'),
        ])
            ->get('https://api.webmaniabr.com/2/nfse/emissao', [
                json_encode($myarray)
            ])
            ->json();

        return $response;
    }
}
