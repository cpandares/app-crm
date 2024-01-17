<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodigoNifToContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
            $table->string("codigo_nif", 100)->nullable()->after("email");
            /* update lastname as nullable */
            $table->string("lastname")->nullable()->change();
            /* update email as nullable */
            $table->string("email")->nullable()->change();
            /* update phone as nullable */
            $table->string("phone")->nullable()->change();
            /* update address as nullable */
            $table->string("address")->nullable()->change();
            /* update city as nullable */
            $table->string("city")->nullable()->change();
            /* update state as nullable */
            $table->string("state")->nullable()->change();
            /* update country as nullable */
            $table->string("country")->nullable()->change();
            /* update zipcode as nullable */
            $table->string("postcode")->nullable()->change();
            /* update company as nullable */
           
            $table->string("website")->nullable()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
