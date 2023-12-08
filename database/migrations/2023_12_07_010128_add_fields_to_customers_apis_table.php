<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCustomersApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers_apis', function (Blueprint $table) {
            
            $table->string('date_created')->nullable();
            $table->string('date_created_gmt')->nullable();
            $table->string('date_modified')->nullable();
            $table->string('date_modified_gmt')->nullable();
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('role')->nullable();
            $table->string('username')->nullable();
            $table->text('billing')->nullable();
            $table->text('shipping')->nullable();
            $table->boolean('is_paying_customer')->nullable();
            $table->string('avatar_url')->nullable();
            $table->text('meta_data')->nullable();
            $table->text('links')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers_apis', function (Blueprint $table) {
            //
        });
    }
}
