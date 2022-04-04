<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = "curriculum";
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'cep',
        'state',
        'city',
        'age',
        'phone',
        'whatsapp',
        'email',
        'gender',

        'schooling_level',
        'formation',
        'institution',
        'hiring_type',
        'desired_function',
        'desired_salary',
        'is_handicapped',
        'cnh',

        'additional_considerations',
        'curriculum_photo_url',
        'is_employed',
        'found_us',
        'active',
    ];

    public function experience(){
        return $this->belongsToMany(ProfessionalExperience::class);
    }

    public function course(){
        return $this->belongsToMany(Course::class);
    }
}
