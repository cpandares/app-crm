<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    use HasFactory;
    //table laravel?
    protected $table = 'campaing';
    protected $fillable = [
        'name',
        'status',
        'contact_id',
        'created_user',
       
    ];

}
