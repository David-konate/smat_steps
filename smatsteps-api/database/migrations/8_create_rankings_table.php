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
        Schema::create('rankings', function (Blueprint $table) {
            $table->id();
            $table->decimal('result_quiz', 5, 2);
            $table->decimal('time_quiz', 20, 2);
            $table->unsignedBigInteger('level');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            // Ajoutez 'nullable()' pour autoriser les valeurs NULL
            $table->foreignId('sous_theme_id')->nullable()->constrained('sous_themes');
            $table->foreignId('theme_id')->constrained('themes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rankings');
    }
};
