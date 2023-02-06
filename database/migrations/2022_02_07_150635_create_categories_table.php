<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->index();
            $table->uuid('parent_id')->index()->nullable();
            $table->string('slug')->index()->nullable();
            $table->enum('status',[0,1])->index()->comment('0-Inactive, 1-Active');
            $table->enum('is_on_home_page',[0,1])->index()->comment('0-No, 1-Yes')->default('0');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('HSN_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
