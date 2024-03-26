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
        Schema::create('smats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('theme_id');
            $table->unsignedBigInteger('sous_theme_id')->nullable(); // Rendez le champ nullable
            $table->unsignedBigInteger('level_id');
            $table->timestamps();
            $table->integer('status')->default(1);

            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            $table->foreign('sous_theme_id')->references('id')->on('sous_themes')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smats');
    }
};
