<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sellers');
        Schema::create('sellers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name')->index()->nullable();
            $table->string('last_name')->index()->nullable();
            $table->string('company_name')->index()->nullable();
            $table->string('profile_avatar')->nullable();
            $table->bigInteger('phone_number')->index()->nullable();
            $table->string('email', 50)->index()->unique()->index();
            $table->string('password')->nullable();
            $table->string('warehouse_id')->index()->nullable();
            $table->string('gst_number')->index()->nullable();
            $table->string('pan_number')->index()->nullable();
            $table->string('bank_name')->index()->nullable();
            $table->string('bank_account_number', 30)->index()->nullable();
            $table->string('ifsc_code')->index()->nullable();
            $table->string('cancel_cheque')->index()->nullable();
            $table->text('business_address')->nullable();
            $table->string('gst_certificate')->index()->nullable();
            $table->string('pan_certificate')->index()->nullable();
            $table->text('pickup_address')->nullable();
            $table->bigInteger('country_id')->unsigned()->index()->default(101)->nullable();
            $table->bigInteger('state_id')->unsigned()->index()->nullable();
            $table->bigInteger('city_id')->unsigned()->index()->nullable();
            $table->bigInteger('pin_code')->nullable();
            $table->enum('status', [0, 1, 2, 3])->comment('0-pending,1-active,2-deactive,3-hold')->index()->nullable();
            $table->enum('business_type', [1, 2, 3])->comment('1-Wholeseller, 2-Retailer, 3-Manufacturer')->index()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('token')->nullable();
            $table->tinyInteger('is_verified')->default(0);
            $table->longtext('seller_referred_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}