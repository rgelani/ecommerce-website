<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id')->index()->nullable();
            $table->uuid('category_first_id')->index()->nullable();
            $table->uuid('seller_id')->index()->nullable();
            $table->string('sku')->index();
            $table->float('MRP')->index();
            $table->float('selling_price')->nullable()->index();
            $table->string('HSN_code')->nullable()->index();
            $table->string('GST')->nullable()->index();
            $table->integer('dispatch_in_day')->nullable()->index();
            $table->integer('quantity')->nullable()->index();
            $table->float('local_delivery_charge')->nullable()->index();
            $table->float('zonal_delivery_charge')->nullable()->index();
            $table->float('national_delivery_charge')->nullable()->index();
            $table->float('weight')->nullable()->index();
            $table->float('length')->nullable()->index();
            $table->float('width')->nullable()->index();
            $table->float('height')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->string('manufacturer')->nullable()->index();
            $table->string('brand_name')->nullable()->index();
            $table->string('color')->nullable()->index();
            $table->string('size')->nullable()->index();
            $table->string('model_no')->nullable()->index();
            $table->string('pack_of')->nullable()->index();
            $table->longText('description')->nullable();
            $table->string('keyword')->nullable()->index();
            $table->string('key_features')->nullable()->index();
            $table->string('meta_tags')->nullable()->index();
            $table->enum('return_order', [0, 1])->comment('0-No, 1-Yes')->nullable()->index();
            $table->integer('return_order_in_day')->nullable()->index();
            $table->float('sale_price')->nullable()->index();
            $table->timestamp('sale_start_date')->nullable()->index();
            $table->timestamp('sale_end_date')->nullable()->index();
            $table->string('country_of_origin')->nullable()->index();
            $table->enum('status', [0, 1])->comment('0-Inactive, 1-Active')->index();
            $table->enum('qc_status', [1, 2, 3, 4, 5])->comment('1-QC-Pending, 2-QC-Progress,3-QC-Pass, 4-QC-Error, 5-QC-Fail')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
