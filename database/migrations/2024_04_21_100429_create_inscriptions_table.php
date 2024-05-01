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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('concours_id')->constrained()->onDelete('cascade');
            $table->string('seriebac');

            $table->integer('num_cni');
            $table->integer('code_postal');

            $table->string('ecole');
            $table->string('nationalite');

            $table->string('releve_bac');
            $table->date('date_Naissance');
            $table->string('lieu_Naissance');
            $table->string('status')->nullable(); // Ajoutez cette ligne pour la colonne d'approbation

            $table->integer('annebac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
