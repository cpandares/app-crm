<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicacions', function (Blueprint $table) {
            $table->id();
            $table->string('asunto');
            $table->longText('detalle');

            $table->unsignedBigInteger('user_created');
            $table->unsignedBigInteger('user_created_for');
            $table->unsignedBigInteger('comunicacion_media_id');

            $table->foreign('user_created')->references('id')->on('users')->onDelete('cascade');  
            $table->foreign('user_created_for')->references('id')->on('contacts')->onDelete('cascade');  
            $table->foreign('comunicacion_media_id')->references('id')->on('comunication_media')->onDelete('cascade'); 
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
        Schema::dropIfExists('comunicacions');
    }
}
