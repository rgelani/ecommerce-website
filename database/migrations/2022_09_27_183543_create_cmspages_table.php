<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmspagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cmspages');
        Schema::create('cmspages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('seller_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longtext('description')->nullable();
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
        Schema::dropIfExists('cmspages');
    }
}
