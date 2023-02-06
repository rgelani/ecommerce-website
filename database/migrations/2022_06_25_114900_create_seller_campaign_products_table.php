<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerCampaignProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seller_campaign_products');
        Schema::create('seller_campaign_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('campaign_id')->index();
            $table->uuid('product_id')->index();
            $table->float('cpc')->default(0)->comment('cost per click')->index();
            $table->boolean('status')->default(true)->index();
            $table->enum('active_keywords',[0,1])->comment('0 - Automatic, 1 - Manual')->index();
            $table->json('keywords')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('campaign_id')->references('id')->on('seller_campaigns')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_campaign_products');
    }
}
