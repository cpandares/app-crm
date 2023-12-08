<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApiProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('api_products', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_name');
            $table->integer('post_parent')->nullable();
            $table->integer('prouct_id')->nullable();
            $table->text('post_content')->nullable();
            $table->text('post_excerpt')->nullable();
            $table->string('post_status')->nullable();
            $table->string('post_password')->nullable();
            $table->integer('menu_order')->nullable();
            $table->timestamp('post_date')->nullable();
            $table->integer('post_author')->nullable();
            $table->string('comment_status')->nullable(); 
            $table->string('sku')->nullable();
            $table->string('parent_sku')->nullable();
            $table->string('children')->nullable();
            $table->boolean('downloadable')->nullable();
            $table->boolean('virtual')->nullable();
            $table->integer('stock')->nullable();
            $table->decimal('regular_price', 8, 2)->nullable();
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
