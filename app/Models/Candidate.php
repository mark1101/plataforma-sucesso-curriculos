<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = "candidate";
    protected $fillable = [
        'user_id',
        'name',
        'access_control',
        'status',
        'entry_date',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class, 'user_id', 'id');
    }


}
