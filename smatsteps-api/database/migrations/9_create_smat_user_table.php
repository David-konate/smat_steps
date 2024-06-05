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
        Schema::create('smat_user', function (Blueprint $table) {
            $table->id();

            $table->decimal('result_smat', 5, 2);
            $table->integer('current_question')->default(0);
            $table->integer('current_points_max')->default(0);
            $table->integer('state')->default(0);

            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('smat_id')->constrained('smats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smat_user');
    }
};
