<?php

namespace Database\Seeders;
use App\Models\Etablissement;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Etablissement::create([
            'nom' => 'lycee de kaffrine',
            'adresse' => 'kaffrine',
            'contact' => '773884056',
        ]);

    }
}
