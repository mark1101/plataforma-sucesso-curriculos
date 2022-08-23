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
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function curriculum()
    {
        return $this->hasOne(Curriculum::class, 'user_id', 'user_id');
    }

    public function planCandidate(){
        return $this->hasOne(CandidatePlanRelation::class, 'candidate_id', 'id');
    }

    public function dueDate(){
        return $this->belongsTo(CandidateDueDate::class, 'user_id' , 'user_id');
    }


}
