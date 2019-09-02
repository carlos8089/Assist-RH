<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nomCategorie'=>Str::random(10);
            'salaireDeBase'=>rand(10);
            'primeAnciennete'=>rand(10);
            'primeCaisse'=>rand(10);
            'primeResponsabilite'=>rand(10);
            'indemniteLogement'=>rand(10);
            'indemniteRepresentation'=>rand(10);
            'primeHabillement'=>rand(10);
            'primeDeplacement'=>rand(10);
            'primeEncouragement'=>rand(10);
            'primeSante'=>rand(10);
            'primeTerrain'=>rand(10);
            'primeJourFerie'=>rand(10);
            'primeSemestrielle'=>rand(10);
            'primeOuvertureCompte'=>rand(10);
        ])
    }
}
