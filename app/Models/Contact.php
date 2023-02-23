<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'country',
        'city',
        'state',
        'postcode',
        'contact_status',
        'user_id',
        'comunication_medium'
    ];


    public function estado(){
        return $this->belongsTo(ContactStatus::class);
    }

}
