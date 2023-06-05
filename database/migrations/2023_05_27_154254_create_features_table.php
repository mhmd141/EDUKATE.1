<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('main_title');
            $table->text('min_dss');
            $table->string('icon1')->nullable();
            $table->string('icon1_title');
            $table->string('icon1_des');
            $table->string('icon2')->nullable();
            $table->string('icon2_title');
            $table->string('icon2_des');
            $table->string('icon3')->nullable();
            $table->string('icon3_title');
            $table->string('icon3_des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
};
