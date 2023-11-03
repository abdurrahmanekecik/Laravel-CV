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
            $table->string("heading")->nullable();
            $table->string("description")->nullable();
            $table->string("summary")->nullable();
            $table->string("slug_url")->nullable();
            $table->string("background_image")->nullable();
            $table->string("author")->nullable();
            $table->string("service")->nullable();
            $table->date("date")->nullable();
            $table->string("detail")->nullable();
            $table->string("image")->nullable();
            $table->string("idea_text")->nullable();
            $table->string("idea_video")->nullable();
            $table->string("result_text")->nullable();
            $table->string("result_image")->nullable();
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
