<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumBlock extends Model
{
    use HasFactory;
    protected $table = 'curriculum_block';
    protected $fillable = [
        'curriculum_id',
        'cnpj',
    ];

    public function curriculum(){
        return $this->hasOne(Curriculum::class, 'curriculum_id' , 'id');
    }
}
