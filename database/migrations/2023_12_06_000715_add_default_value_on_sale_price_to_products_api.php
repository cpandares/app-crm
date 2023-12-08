<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueOnSalePriceToProductsApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_api', function (Blueprint $table) {
           
            $table->string('regular_price')->default('0.00')->change();
            $table->string('sale_price')->default('0.00')->change();
            $table->string('price')->default('0.00')->change();
            $table->string('on_sale')->default('0.00')->change();
            $table->string('stock')->default('0.00')->change();
            $table->string('total_sales')->default('0.00')->change();
            $table->string('weight')->default('0.00')->change();
            $table->string('dimensions_length')->default('0.00')->change();
            $table->string('dimensions_width')->default('0.00')->change();
            $table->string('dimensions_height')->default('0.00')->change();
            $table->string('average_rating')->default('0.00')->change();
            $table->string('rating_count')->default('0.00')->change();
            $table->string('related_ids')->default('0.00')->change();
            $table->string('upsell_ids')->default('0.00')->change();
            $table->string('cross_sell_ids')->default('0.00')->change();
            $table->string('parent_id')->default('0.00')->change();
            $table->string('purchase_note')->default('0.00')->change();
            $table->string('categories')->default('0.00')->change();
            $table->string('tags')->default('0.00')->change();
            $table->string('images')->default('0.00')->change();
            $table->string('attributes')->default('0.00')->change();
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
