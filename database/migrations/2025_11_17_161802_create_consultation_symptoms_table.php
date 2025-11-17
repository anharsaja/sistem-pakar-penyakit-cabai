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
        Schema::create('consultation_symptoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consultation_id');
            $table->unsignedBigInteger('symptom_id');
            $table->decimal('cf_user', 3, 2);
            $table->timestamps();

            $table->foreign('consultation_id')
                ->references('id')->on('consultations')
                ->onDelete('cascade');

            $table->foreign('symptom_id')
                ->references('id')->on('symptoms')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_symptoms');
    }
};
