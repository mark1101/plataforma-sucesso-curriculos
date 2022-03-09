<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $table = "help_tickets";
    protected $fillable = [
        'name',
        'email',
        'subject',
        'problem',
        'date',
    ];
}
