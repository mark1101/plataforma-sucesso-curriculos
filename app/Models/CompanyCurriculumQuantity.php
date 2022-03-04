<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCurriculumQuantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'quantity'
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'id');
    }
}
