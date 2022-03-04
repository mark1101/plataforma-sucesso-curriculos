<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
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
        return $this->belongsTo(CurriculumCompany::class, 'company_id' , 'id');
    }
}
