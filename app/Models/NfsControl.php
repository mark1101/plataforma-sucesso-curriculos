<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NfsControl extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'uuid',
        'payment_id'
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id' , 'id');
    }
}
