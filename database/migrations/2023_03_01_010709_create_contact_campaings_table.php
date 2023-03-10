<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_campaings', function (Blueprint $table) {
            $table->bigIncrements('contact_campaing_id');
            $table->unsignedBigInteger('camaping_id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('camaping_id')->references('id')->on('campaing')->onDelete('cascade'); 
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
        Schema::dropIfExists('contact_campaings');
    }
}
