<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerCampaignAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seller_campaign_amounts');
        Schema::create('seller_campaign_amounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('seller_id')->index()->nullable();
            $table->double('total_amount')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('seller_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_campaign_amounts');
    }
}
