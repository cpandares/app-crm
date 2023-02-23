<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('city');  
            $table->string('state')->nullable();  
            $table->string('postcode')->nullable();          
            $table->unsignedBigInteger('contact_status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('comunication_medium');
            $table->foreign('contact_status')->references('id')->on('contact_status')->onDelete('cascade');  
            $table->foreign('comunication_medium')->references('id')->on('comunication_media')->onDelete('cascade');  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
