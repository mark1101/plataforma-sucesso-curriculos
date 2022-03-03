<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlanRelation extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'plan_id',
        'quantity',
    ];
}
