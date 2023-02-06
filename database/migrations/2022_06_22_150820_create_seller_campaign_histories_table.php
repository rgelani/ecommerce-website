<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerCampaignHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seller_campaign_histories');
        Schema::create('seller_campaign_histories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('seller_id')->index()->nullable();
            $table->double('amount')->default(0)->index();
            $table->enum('type', ['credit', 'debit', 'referral_bonus'])->index();
            $table->string('razorpay_payment_id')->nullable()->index();
            $table->string('currency')->nullable()->index();
            $table->string('method')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->string('card_id')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->bigInteger('last4')->nullable()->index();
            $table->string('network')->nullable()->index();
            $table->string('issuer')->nullable()->index();
            $table->string('description')->nullable()->index();
            $table->tinyInteger('transaction_type')->comment('0=WALLET| 1=DIRECT_DEPOSIT_BY_RAZOR_PAY')->nullable()->index();
            $table->tinyInteger('status')->comment('0=PENDING | 1=APPROVED | 2=REJECTED ')->nullable()->index();
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
        Schema::dropIfExists('seller_campaign_histories');
    }
}
