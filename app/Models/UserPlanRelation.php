<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlanRelation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_id',
        'bought_date',
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id' , 'id');
    }

    public function plan(){
        return $this->hasOne(UserPlan::class, 'plan_id', 'id');
    }
}
