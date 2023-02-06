<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('line_items');
        Schema::create('line_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('variant_id')->nullable()->index();
            $table->uuid('product_id')->nullable()->index();
            $table->uuid('seller_id')->nullable()->index();
            $table->string('wbns')->nullable()->index();
            $table->string('upload_wbn')->nullable()->index();
            $table->uuid('order_id')->nullable()->index();
            $table->bigInteger('quantity')->nullable()->index();
            $table->float('tax_total')->nullable()->index();
            $table->float('selling_price')->nullable()->index();
            $table->float('MRP')->nullable()->index();
            $table->float('penalty')->nullable()->index();
            $table->float('total_price')->nullable()->index();
            $table->float('weight')->nullable()->index();
            $table->float('shiping_charge')->nullable()->index();
            $table->string('sku')->nullable()->index();
            $table->text('barcode')->nullable();
            $table->text('oid_barcode')->nullable();
            $table->string('image')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->string('discription')->nullable()->index();
            $table->enum('status', [0, 1, 2, 3, 4, 5])->comment('')->default('0')->index();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('variant_id')->references('id')->on('variants')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('line_items');
    }
}