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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('des')->nullable();
            $table->string('image')->nullable();

            $table->integer('statice1')->nullable();
            $table->string('statice1_title')->nullable();
            $table->integer('statice2')->nullable();
            $table->string('statice2_title')->nullable();
            $table->integer('statice3')->nullable();
            $table->string('statice3_title')->nullable();
            $table->integer('statice4')->nullable();
            $table->string('statice4_title')->nullable();
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
        Schema::dropIfExists('pages');
    }
};
