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
        Schema::create('inscription', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_inscription')->nullable(false);
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('concours_id');
            $table->timestamps(); // Cette ligne crée automatiquement les colonnes 'created_at' et 'updated_at', pas besoin de les définir manuellement
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
