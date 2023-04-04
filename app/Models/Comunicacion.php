<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicacion extends Model
{
    use HasFactory;

    protected $fillable= [
        'asunto',
        'detalle',
        'user_created',
        'user_created_for',
        'comunicacion_media_id',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_created', 'id');
    }

}
