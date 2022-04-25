<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPlan extends Model
{
    use HasFactory;
    protected $table = "company_plan";
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'type',
    ];
}
