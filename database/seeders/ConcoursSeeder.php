<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concours;

class ConcoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concours::create([
            'nom' => 'Titre du concours',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-04-30',
            'description' => 'Description du concours',
            'etablissement_id' => '1',

            // Ajoutez d'autres colonnes et leurs valeurs ici
        ]);
    }
}
