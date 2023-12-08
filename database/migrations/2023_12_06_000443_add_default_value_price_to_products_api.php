<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValuePriceToProductsApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_api', function (Blueprint $table) {
            //
            $table->string('regular_price')->default('0.00')->change();
            $table->string('sale_price')->default('0.00')->change();
            $table->string('price')->default('0.00')->change();
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
