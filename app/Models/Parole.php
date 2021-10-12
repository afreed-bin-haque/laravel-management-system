<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parole extends Model
{
    use HasFactory;
    protected $fillable=[
        'prisioner_id',
        'interviewer',
        'hearing',
        'remand',
        'investigation',
        'entrydate',
        'exitdate',
        'lastremandvisit',
        'b_status',
        'prison_duration',
        'author',
    ];
}
