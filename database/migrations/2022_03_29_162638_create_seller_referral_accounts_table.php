<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerReferralAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seller_referral_accounts');
        Schema::create('seller_referral_accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('seller_id')->index()->nullable();
            $table->uuid('referral_seller_id')->index()->nullable();
            $table->tinyInteger('bonus_status')->default(0)->comment('0=PENDING_BONUS | 1=COMPLETE_BONUS');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('referral_seller_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_referral_accounts');
    }
}
