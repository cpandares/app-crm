<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultNullDataToProductsApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_api', function (Blueprint $table) {
            /* 
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
            */

            $table->string('post_title')->nullable()->change();
            $table->string('post_name')->nullable()->change();
            $table->string('post_parent')->nullable()->change();
            $table->string('post_content')->nullable()->change();
            $table->string('post_excerpt')->nullable()->change();
            $table->string('post_status')->nullable()->change();
            $table->string('post_password')->nullable()->change();
            $table->string('menu_order')->nullable()->change();
            $table->string('post_date')->nullable()->change();
            $table->string('post_author')->nullable()->change();
            $table->string('comment_status')->nullable()->change();
            $table->string('sku')->nullable()->change();
            $table->string('parent_sku')->nullable()->change();
            $table->string('children')->nullable()->change();
            $table->string('downloadable')->nullable()->change();
            $table->string('virtual')->nullable()->change();
            $table->string('stock')->nullable()->change();
            $table->string('regular_price')->nullable()->change();
            $table->string('sale_price')->nullable()->change();
            $table->string('sale_price_dates_from')->nullable()->change();
            $table->string('sale_price_dates_to')->nullable()->change();
            $table->string('price')->nullable()->change();
            $table->string('on_sale')->nullable()->change();
            $table->string('purchasable')->nullable()->change();
            $table->string('total_sales')->nullable()->change();
            $table->string('tax_status')->nullable()->change();
            $table->string('tax_class')->nullable()->change();
            $table->string('manage_stock')->nullable()->change();
            $table->string('backorders')->nullable()->change();
            $table->string('backorders_allowed')->nullable()->change();
            $table->string('backordered')->nullable()->change();
            $table->string('sold_individually')->nullable()->change();
            $table->string('weight')->nullable()->change();
            $table->string('dimensions_length')->nullable()->change();
            $table->string('dimensions_width')->nullable()->change();
            $table->string('dimensions_height')->nullable()->change();
            $table->string('shipping_required')->nullable()->change();
            $table->string('shipping_taxable')->nullable()->change();
            $table->string('shipping_class')->nullable()->change();
            $table->string('shipping_class_id')->nullable()->change();
            $table->string('reviews_allowed')->nullable()->change();
            $table->string('average_rating')->nullable()->change();
            $table->string('rating_count')->nullable()->change();
            $table->string('related_ids')->nullable()->change();
            $table->string('upsell_ids')->nullable()->change();
            $table->string('cross_sell_ids')->nullable()->change();
            $table->string('parent_id')->nullable()->change();
            $table->string('purchase_note')->nullable()->change();
            $table->string('categories')->nullable()->change();
            $table->string('tags')->nullable()->change();
            $table->string('images')->nullable()->change();
            $table->string('attributes')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_api', function (Blueprint $table) {
            //
        });
    }
}
