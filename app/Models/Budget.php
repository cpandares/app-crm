<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'observacion',
        'price',
        'valid_until',
        'user_created',
        'user_created_for',
    ];


}
