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
            $table->string('campaing_name');
            $table->string('country');
            $table->string('city');
            $table->date('init_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();          
            $table->unsignedBigInteger('created_user');            
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade'); 
            $table->foreign('created_user')->references('id')->on('users')->onDelete('cascade');                 
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
