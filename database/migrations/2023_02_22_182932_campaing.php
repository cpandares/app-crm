<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Campaing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('campaing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status');
            $table->unsignedBigInteger('contact_id');            
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');                 
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
        //
    }
}
