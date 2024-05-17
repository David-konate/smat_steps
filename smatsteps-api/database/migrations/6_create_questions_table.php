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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('image_question')->nullable();


            $table->timestamps();

            $table->foreignId('sous_theme_id')->constrained('sous_themes');
            $table->foreignId('theme_id')->constrained('themes');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('level_id')->constrained('levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
