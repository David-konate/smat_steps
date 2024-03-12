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
        Schema::create('sous_themes', function (Blueprint $table) {
            $table->id();
            $table->string('sous_theme', 50);
            $table->unsignedBigInteger('theme_id'); // Ajoutez la colonne theme_id
            $table->timestamps();
            $table->string('theme_image', 50)->nullable();
            // Ajoutez la contrainte de clé étrangère
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_themes');
    }
};
