<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("heading");
            $table->string("description");
            $table->string("summary");
            $table->string("slug_url");
            $table->string("background_image");
            $table->string("author");
            $table->string("service");
            $table->date("date");
            $table->string("detail");
            $table->string("image");
            $table->string("idea_text");
            $table->string("idea_video");
            $table->string("result_text");
            $table->string("result_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
