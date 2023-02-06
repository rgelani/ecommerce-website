<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.Schema::drop('sharks');
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('menus');
        Schema::create('menus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('seller_id')->nullable();
            $table->string('title', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('parent_id')->default('0');
            $table->string('icon_class', 50)->nullable();
            $table->char('is_active', 1)->default('Y')->comment("Y=>Yes, N=>No");
            $table->char('is_delete', 1)->default('N')->comment("Y=>Yes, N=>No");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
