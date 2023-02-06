<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChildSubCategoryToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->uuid('child_sub_category_id')->nullable();
            $table->renameColumn('category_first_id', 'sub_category_id');
            $table->renameColumn('HSN_code', 'hsn_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('child_sub_category_id');
            $table->renameColumn('sub_category_id', 'category_first_id');
            $table->renameColumn('hsn_id', 'HSN_code');
        });
    }
}
