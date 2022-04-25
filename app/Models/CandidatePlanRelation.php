<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatePlanRelation extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id', 'plan_id'
    ];

    public function candidate(){
        return $this->hasOne(Candidate::class, 'candidate_id' , 'id');
    }

    public function plan(){
        return $this->hasOne(Plan::class, 'plan_id' , 'id');
    }
}
