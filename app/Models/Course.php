<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";
    protected $fillable = [
        'curriculum_id',
        'name_courses',
        'school',
        'hours',
    ];

}
