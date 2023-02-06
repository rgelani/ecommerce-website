<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable()->index();
            $table->uuid('address_id')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('shiping_charge')->nullable()->index();
            $table->float('total')->nullable()->index();
            $table->float('total_gst')->nullable()->index();
            $table->enum('payment_mode', [0, 1, 2, 3])->comment('0-COD,1-Prepaid,2-Pickup,3-REPL')->default('0')->index();
            $table->enum('shipping_mode', [0, 1])->comment('0-Surface,1-Express')->default('0')->index();
            $table->enum('status', [0, 1, 2, 3, 4, 5])->comment('')->default('0')->index();
            $table->timestamp('email_verified_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}