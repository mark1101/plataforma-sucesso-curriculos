<?php

namespace App\Http\Controllers\MercadoPago;

use App\Http\Controllers\Controller;
use App\Models\CompanyPlan;
use App\Models\Payments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function paymentPending(Request $request)
    {
        $payment_id = $request->get('payment_id');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.mercadopago.com/v1/payments/' . $payment_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers = array();
        $headers[] = 'Authorization: Bearer APP_USR-2639075007624755-022605-cb1ef92ec90514b47da96b17cdb98edb-230427984';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        } else {
            $result = json_decode($result);
        }
        curl_close($ch);
        $status = $result->status;

        if ($status == 'pending') {
            $plan = CompanyPlan::where('name', $result->additional_info->items[0]->title)->first();
            Payments::create([
                'payment_id' => $payment_id,
                'user_id' => 2, //Auth::id();
                'product' => $plan->name,
                'type' => 0,
                'price' => $plan->price,
                'status' => 'pending',
            ]);
            return view('Payment.pending');
        }
    }
}
