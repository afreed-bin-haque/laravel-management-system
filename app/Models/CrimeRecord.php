<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrimeRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'prisioner_id',
        'case_id',
        'author',
        'case_type',
        'description',
        'laywer_name',
        'judge_name',
        'email',
    ];
}
