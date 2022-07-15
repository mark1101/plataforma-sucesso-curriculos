<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'user_id',
        'product', 
        'type', 
        'price', 
        'status'
    ]; 

    public function user(){
        return $this->hasOne(User::class, 'user_id' , 'id');
    }
}
