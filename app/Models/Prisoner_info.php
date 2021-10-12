<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'relation',
        'gender',
        'age',
        'Blood_g',
        'height',
        'weight',
        'punishment',
        'address',
        'prison_cell',
        'status',
        'prisoner_image',
        'inserted_by',
    ];
}
