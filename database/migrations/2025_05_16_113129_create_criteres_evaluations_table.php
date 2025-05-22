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
        Schema::create('criteres_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description');
            $table->integer('poids')->default(1);
            $table->foreignId('type_evaluation_id')->constrained('type_evaluations');
            $table->foreignId('campagne_evaluation_id')->constrained('campagne_evaluations');
            $table->foreignId('evaluation_id')->constrained('evaluations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criteres_evaluations');
    }
};
