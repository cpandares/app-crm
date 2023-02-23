<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    use HasFactory;
    //table laravel?
    protected $fillable = [
        'name',
        'status',
        'contact_id',
    ];

}
