<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('addresses');
        Schema::create('addresses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('address1')->nullable()->index();
            $table->string('address2')->nullable()->index();
            $table->string('address3')->nullable()->index();
            $table->string('phone_no')->nullable()->index();
            $table->string('alternate_phone_no')->nullable()->index();
            $table->bigInteger('country_id')->nullable()->index()->default(101)->unsigned();
            $table->bigInteger('state_id')->nullable()->index()->unsigned();
            $table->bigInteger('city_id')->nullable()->index()->unsigned();
            $table->bigInteger('pin_code')->nullable()->index();
            $table->enum('type', [0, 1])->comment('0-home,1-work')->default('0')->index();
            $table->enum('status', [0, 1])->comment('0-home,1-work')->default('1')->index();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}