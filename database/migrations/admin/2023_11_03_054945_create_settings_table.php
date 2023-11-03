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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("");
            $table->string('description')->default("");
            $table->string('favicon')->default("");
            $table->string('logo')->default("");
            $table->string('server')->default("");
            $table->string('user')->default("");
            $table->string('pass')->default("");
            $table->string('port')->default("");
            $table->string('ssltls')->default("");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
