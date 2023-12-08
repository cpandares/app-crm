<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        /* post_title,post_name,post_parent,ID,post_content,post_excerpt,post_status,post_password,menu_order,post_date,post_author,comment_status,sku,parent_sku,children,downloadable,virtual,stock,regular_price */
        Schema::create('products_api', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_name');
            $table->string('post_parent');
            $table->string('post_content');
            $table->string('post_excerpt');
            $table->string('post_status');
            $table->string('post_password');
            $table->string('menu_order');
            $table->string('post_date');
            $table->string('post_author');
            $table->string('comment_status');
            $table->string('sku');
            $table->string('parent_sku');
            $table->string('children');
            $table->string('downloadable');
            $table->string('virtual');
            $table->string('stock');
            $table->string('regular_price');
            $table->string('sale_price');
            $table->string('sale_price_dates_from');
            $table->string('sale_price_dates_to');
            $table->string('price');
            $table->string('on_sale');
            $table->string('purchasable');
            $table->string('total_sales');
            $table->string('tax_status');
            $table->string('tax_class');
            $table->string('manage_stock');
            $table->string('backorders');
            $table->string('backorders_allowed');
            $table->string('backordered');
            $table->string('sold_individually');
            $table->string('weight');
            $table->string('dimensions_length');
            $table->string('dimensions_width');
            $table->string('dimensions_height');
            $table->string('shipping_required');
            $table->string('shipping_taxable');
            $table->string('shipping_class');
            $table->string('shipping_class_id');
            $table->string('reviews_allowed');
            $table->string('average_rating');
            $table->string('rating_count');
            $table->string('related_ids');
            $table->string('upsell_ids');
            $table->string('cross_sell_ids');
            $table->string('parent_id');
            $table->string('purchase_note');
            $table->string('categories');
            $table->string('tags');
            $table->string('images');
            $table->string('attributes');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
