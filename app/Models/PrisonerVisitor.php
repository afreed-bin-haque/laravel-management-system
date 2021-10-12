<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrisonerVisitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'relation',
        'gender',
        'age',
        'prisoner_id',
        'no_visit',
        'inserted_on',
        'inserted_by',
    ];
}
