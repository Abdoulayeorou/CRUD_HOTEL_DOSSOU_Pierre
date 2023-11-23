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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description'); // Description field
            $table->string('nom_chambre'); // Nom de la chambre field
            $table->decimal('prix', 10, 2); // Prix field (decimal with 10 digits, 2 decimal places)
            $table->integer('nombre_lits'); // Nombre de lits field
            $table->integer('max_adultes')->nullable(); // Max d’adultes field (nullable)
            $table->integer('max_enfants')->nullable(); // Enfants maximum autorisé field (nullable)
            $table->json('attributs')->nullable(); // Attributs field (JSON for services)
            $table->enum('statut', ['Disponible', 'Non disponible']); // Statut field as enum

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
