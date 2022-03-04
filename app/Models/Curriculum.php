<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'state',
        'city',
        'age',
        'phone',
        'whatsapp',
        'email',
        'gender',
        'is_employed',
        'is_handicapped',
        'cnh',
        'desired_salary',
        'hiring_type',
        'desired_function',
        'schooling_level',
        'formation',
        'occupied_job',
        'experience_time',
        'company_field',
        'courses',
        'additional_considerations',
        'curriculum_photo_url',
        'found_us',
    ];
}
