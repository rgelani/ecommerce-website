<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCategoryIdTypeInSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->string('category_id')->change();
        });

        Schema::table('child_sub_categories', function (Blueprint $table) {
            $table->string('sub_category_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->integer('category_id')->change();
        });

        Schema::table('child_sub_categories', function (Blueprint $table) {
            $table->integer('sub_category_id')->change();
        });
    }
}
