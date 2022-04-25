<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{
    use HasFactory;

    protected $table = "professional_experiences";
    protected $fillable = [
        'curriculum_id',
        'name_company',
        'company_field',
        'occupied_job',
        'years',
        'months',

    ];

}
