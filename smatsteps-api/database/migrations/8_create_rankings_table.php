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

            $table->decimal('result_quizz', 5, 2);
            $table->decimal('time_quizz', 20, 2);
            $table->unsignedBigInteger('level');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('sous_theme_id')->constrained('sous_themes');
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
