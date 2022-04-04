<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumCompany extends Model
{
    use HasFactory;
    protected $table = "curriculum_company_relation";
    protected $fillable = [
        'company_id',
        'curriculum_id',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'id');
    }

    public function curriculum()
    {
        return $this->hasOne(Curriculum::class, 'curriculum_id', 'id');
    }

}
