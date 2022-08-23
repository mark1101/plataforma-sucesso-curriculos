<?php

namespace App\Http\Resources;

use App\Models\CurriculumCompany;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'cnpj' => $this->cnpj,
            'address' => $this->address, 
            'created_at' => $this->created_at,
            'curriculumDownload' => $this->curriculumDown($this->quantity->company_id),
            'quantity' => $this->quantity
        ];
    }

    public function curriculumDown($company){
        return CurriculumCompany::where('company_id', $company)->count();
    }
}
