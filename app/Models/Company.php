<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "company";
    protected $fillable = [
        'user_id',
        'name',
        'status',
        'cnpj',
        'address',
    ];

    public function user(){
        return $this->hasOne(User::class, 'user_id' , 'id');
    }

    public function curriculumDownload(){
        return $this->belongsTo(CurriculumCompany::class, 'id' , 'company_id');
    }

    public function quantity(){
        return $this->hasOne(CompanyCurriculumQuantity::class, 'company_id', 'id');
    }

    public function experience(){
        return $this->hasMany(ProfessionalExperience::class, 'curriculum_id' , 'id');
    }

    public function courses(){
        return $this->hasMany(Course::class, 'curriculum_id' , 'id');
    }
}
