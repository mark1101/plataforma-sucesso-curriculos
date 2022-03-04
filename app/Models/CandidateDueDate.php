<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDueDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'due_date'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
