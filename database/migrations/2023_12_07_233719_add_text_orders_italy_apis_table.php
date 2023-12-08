<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTextOrdersItalyApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       
        Schema::table('order_italy_apis', function (Blueprint $table) {
            //
            $table->text('shipping')->nullable()->change();
            $table->text('billing')->nullable()->change();
            $table->text('meta_data')->nullable()->change();
            $table->text('line_items')->nullable()->change();
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
