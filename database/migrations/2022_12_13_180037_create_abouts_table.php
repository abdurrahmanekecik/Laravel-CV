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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("");
            $table->string('description')->default("");
            $table->string('experience')->default("");
            $table->string('title1')->default("");
            $table->string('title1exp')->default("");
            $table->string('title2')->default("");
            $table->string('title2exp')->default("");
            $table->string('title3')->default("");
            $table->string('title3exp')->default("");
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
        Schema::dropIfExists('abouts');
    }
};
