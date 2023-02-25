<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $filliable = [
        'product_name',
        'product_description',
        'image',
        'product_created_by',
        'price_esp',
        'price_ger',
        'price_italy',
        'price_usa',
    ];
}
