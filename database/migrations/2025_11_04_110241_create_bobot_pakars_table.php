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
        Schema::create('bobot_pakars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disease_id')->constrained('diseases')->onDelete('cascade');
            $table->foreignId('symptom_id')->constrained('symptoms')->onDelete('cascade');
            $table->float('mb')->default(0);
            $table->float('md')->default(0);
            $table->timestamps();

            $table->unique(['disease_id', 'symptom_id']); // kombinasi unik
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bobot_pakars');
    }
};
