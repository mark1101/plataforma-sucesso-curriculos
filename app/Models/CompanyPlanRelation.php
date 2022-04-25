<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlanRelation extends Model
{
    use HasFactory;

    protected $table = "company_plan_relation";
    protected $fillable = [
        'company_id',
        'plan_id',
    ];


    public function company(){
        return $this->hasOne(Company::class, 'id' , 'company_id');
    }

    public function plan(){
        return $this->hasOne(CompanyPlan::class, 'id' , 'plan_id');
    }
}
