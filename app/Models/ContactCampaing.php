<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCampaing extends Model
{
    use HasFactory;


    protected $table = 'contact_campaings';

    protected $fillable = [
        'camaping_id',
        'contact_campaings',
        'user_id'
    ];

}
