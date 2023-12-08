<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerApiItaly extends Model
{
    use HasFactory;
    protected $table = 'customers_apis_italy';
    protected $fillable = [
        'id',
        'date_created',
        'date_created_gmt',
        'date_modified',
        'date_modified_gmt',
        'email',
        'first_name',
        'last_name',
        'role',
        'username',
        'billing',
        'shipping',
        'is_paying_customer',
        'avatar_url',
        'meta_data',
        'links',
        'id_customer',
        'origin'
    ];
}
