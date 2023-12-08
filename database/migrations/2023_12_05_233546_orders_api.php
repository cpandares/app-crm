<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // orders_api
        Schema::create('orders_api', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->string('order_status');
            $table->string('order_date');
            $table->string('order_time');
            $table->string('order_total');
            $table->string('order_currency');
            $table->string('order_payment_method');
            $table->string('order_payment_status');
            $table->string('order_payment_date');
            $table->string('order_payment_time');
            $table->string('order_payment_amount');
            $table->string('order_payment_currency');
            $table->string('order_payment_transaction_id');
            $table->string('order_payment_transaction_status');
            $table->string('order_payment_transaction_date');
            $table->string('order_payment_transaction_time');
            $table->string('order_payment_transaction_amount');
            $table->string('order_payment_transaction_currency');
            $table->string('order_payment_transaction_method');
            $table->string('order_payment_transaction_card_type');
            $table->string('order_payment_transaction_card_number');
            $table->string('order_payment_transaction_card_expiry');
            $table->string('order_payment_transaction_card_cvv');
            $table->string('order_payment_transaction_card_holder');
            $table->string('order_payment_transaction_card_issuer');
            $table->string('order_payment_transaction_card_country');
            $table->string('order_payment_transaction_card_country_code');
            $table->string('order_payment_transaction_card_bank');
            $table->string('order_payment_transaction_card_bank_phone');
            $table->string('order_payment_transaction_card_bank_city');
            $table->string('order_payment_transaction_card_bank_state');
            $table->string('order_payment_transaction_card_bank_postal_code');
            $table->string('order_payment_transaction_card_bank_country');
            $table->string('order_payment_transaction_card_bank_country_code');
            $table->string('order_payment_transaction_card_bank_url');
            $table->string('order_payment_transaction_card_bank_logo');
            $table->string('order_payment_transaction_card_bank_logo_small');
            $table->string('order_payment_transaction_card_bank_logo_png');
            $table->string('order_payment_transaction_card_bank_logo_small_png');
            $table->string('order_payment_transaction_card_bank_type');
            
            $table->string('order_customer_id');
            $table->string('order_customer_name');
            $table->string('order_customer_email');
            $table->string('order_customer_phone');
            $table->string('order_customer_address');
            $table->string('order_customer_city');
            $table->string('order_customer_state');
            $table->string('order_customer_postal_code');
            $table->string('order_customer_country');
            $table->string('order_customer_country_code');

            $table->string('order_shipping_id');
            $table->string('order_shipping_name');
            

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
