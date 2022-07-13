<?php

namespace App\Http\Resources;

use App\Models\NfsControl;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentsCompanyResource extends JsonResource
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
            'id' => $this->id, 
            'name' => $this->name, 
            'price' => $this->price, 
            'status' => $this->status, 
            'nfs' => $this->getNfs($this->id),
            'created_at' => $this->created_at
        ];
    }

    public function getNfs($payment_id){

        $nfs = NfsControl::where('payment_id' , $payment_id)->get();
        return $nfs;
    }
}
