<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegPolice extends Model
{
    use HasFactory;
    protected $fillable = [
        'rank',
        'name',
        'email',
        'gender',
        'polic_station',
        'age',
        'blood_g',
        'duty_t',
        'join_d',
        'position_p',
    ];
}
