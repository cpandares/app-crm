<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProuctsApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proucts_apis', function (Blueprint $table) {
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('permalink')->nullable();
            $table->string('date_created')->nullable();
            $table->string('date_created_gmt')->nullable();
            $table->string('date_modified')->nullable();
            $table->string('date_modified_gmt')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('featured')->nullable();
            $table->string('catalog_visibility')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('sku')->nullable();
            $table->string('price')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('date_on_sale_from')->nullable();
            $table->string('date_on_sale_from_gmt')->nullable();
            $table->string('date_on_sale_to')->nullable();
            $table->string('date_on_sale_to_gmt')->nullable();
            $table->string('price_html')->nullable();
            $table->string('on_sale')->nullable();
            $table->string('purchasable')->nullable();
            $table->string('total_sales')->nullable();
            $table->string('virtual')->nullable();
            $table->string('downloadable')->nullable();
            $table->string('downloads')->nullable();
            $table->string('download_limit')->nullable();
            $table->string('download_expiry')->nullable();
            $table->string('external_url')->nullable();
            $table->string('button_text')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('tax_class')->nullable();
            $table->string('manage_stock')->nullable();
            $table->string('stock_quantity')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('backorders')->nullable();
            $table->string('backorders_allowed')->nullable();
            $table->string('backordered')->nullable();
            $table->string('sold_individually')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('shipping_required')->nullable();
            $table->string('shipping_taxable')->nullable();
            $table->string('shipping_class')->nullable();
            $table->string('shipping_class_id')->nullable();
            $table->string('reviews_allowed')->nullable();
            $table->string('average_rating')->nullable();
            $table->string('rating_count')->nullable();
            $table->string('related_ids')->nullable();
            $table->string('upsell_ids')->nullable();
            $table->string('cross_sell_ids')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('purchase_note')->nullable();
            $table->string('categories')->nullable();
            $table->string('tags')->nullable();
            $table->string('images')->nullable();
            $table->string('attributes')->nullable();
            $table->string('default_attributes')->nullable();
            $table->string('variations')->nullable();
            $table->text('meta_data')->nullable();
            $table->string('stock')->nullable();
            $table->string('price_format')->nullable();            
            $table->string('related')->nullable();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proucts_apis', function (Blueprint $table) {
            //
        });
    }
}
