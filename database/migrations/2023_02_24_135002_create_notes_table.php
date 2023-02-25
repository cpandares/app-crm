<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('observacion')->nullable();
            $table->unsignedBigInteger('user_created');
            $table->unsignedBigInteger('user_created_for');

            $table->foreign('user_created')->references('id')->on('users')->onDelete('cascade');  
            $table->foreign('user_created_for')->references('id')->on('contacts')->onDelete('cascade');  
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
        Schema::dropIfExists('notes');
    }
}
