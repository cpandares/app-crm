<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItalyApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_italy_apis', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('status')->nullable();
            $table->string('currency')->nullable();
            $table->string('version')->nullable();
            $table->string('prices_include_tax')->nullable();
            $table->string('date_created')->nullable();
            $table->string('date_modified')->nullable();
            $table->string('discount_total')->nullable();
            $table->string('discount_tax')->nullable();
            $table->string('shipping_total')->nullable();
            $table->string('shipping_tax')->nullable();
            $table->string('cart_tax')->nullable();
            $table->string('total')->nullable();
            $table->string('total_tax')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('order_key')->nullable();
            $table->string('billing')->nullable();
            $table->string('shipping')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_method_title')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('date_paid')->nullable();
            $table->string('meta_data')->nullable();
            $table->string('line_items')->nullable();
            $table->string('origin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_italy_apis');
    }
}
