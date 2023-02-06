<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('seller_campaigns');
        Schema::create('seller_campaigns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->index();
            $table->uuid('seller_id')->index()->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 - Inactive, 1 - Active, 2 - Out of Budget, 3 - Ineligible')->index();
            $table->tinyInteger('type')->default(0)->comment('0 - Daily , 1 - Total')->index();
            $table->float('total_amount')->default(0)->index();
            $table->float('remaining_amount')->default(0)->index();
            $table->boolean('no_end_time')->default(0)->index();
            $table->string('start_time')->nullable()->index();
            $table->string('end_time')->nullable()->index();
            $table->timestamps();

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
        Schema::dropIfExists('seller_campaigns');
    }
}
