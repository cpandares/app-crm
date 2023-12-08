<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItalyApi extends Model
{
    use HasFactory;
    protected $table = 'order_italy_apis';
    protected $fillable = [
        'id',
        'parent_id',
        'status',
        'currency',
        'version',
        'prices_include_tax',
        'date_created',
        'date_modified',
        'discount_total',
        'discount_tax',
        'shipping_total',
        'shipping_tax',
        'cart_tax',
        'total',
        'total_tax',
        'customer_id',
        'order_key',
        'billing',
        'shipping',
        'payment_method',
        'payment_method_title',
        'transaction_id',
        'date_paid',
        'meta_data',
        'line_items',
        'origin'
    ];

}
