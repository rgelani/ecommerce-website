<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSellerIdToHsnCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hsn_codes', function (Blueprint $table) {
            $table->uuid("seller_id")->nullable();
            $table->uuid("child_sub_category_id")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hsn_codes', function (Blueprint $table) {
            $table->dropColumn('seller_id');
            $table->integer('child_sub_category_id')->change();
        });
    }
}
