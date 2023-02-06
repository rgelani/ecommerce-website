<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('marketings');
        Schema::create('marketings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->index();
            $table->bigInteger('budget')->index();
            $table->boolean('daily_or_total')->comment('0 - Daily Budget, 1 - Total Budget')->index();
            $table->uuid('product_id')->index();
            $table->string('start_date')->index();
            $table->string('end_date')->index();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketings');
    }
}
