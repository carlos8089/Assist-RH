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
            'nomCategorie'=> 'Directeur',
            'categorie_salaireDeBase'=> 300000,
            'categorie_primeCaisse'=>0,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>50000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Gestionnaires',
            'categorie_salaireDeBase'=> 100000,
            'categorie_primeCaisse'=>25000,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>10000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>3000,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Comptables',
            'categorie_salaireDeBase'=> 175000,
            'categorie_primeCaisse'=>50000,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>15000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Caissiers',
            'categorie_salaireDeBase'=> 75000,
            'categorie_primeCaisse'=>35000,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>10000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Personnel de soutien',
            'categorie_salaireDeBase'=> 100000,
            'categorie_primeCaisse'=>0,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>5000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Personnel auxiliaire',
            'categorie_salaireDeBase'=> 100000,
            'categorie_primeCaisse'=>0,
            'categorie_primeAnciennete'=>10000,
            'categorie_primeResponsabilite'=>5000,
            'categorie_indemniteLogement'=>6000,
            'categorie_indemniteRepresentation'=>5000,
            'categorie_primeHabillement'=>5000,
            'categorie_primeDeplacement'=>5000,
            'categorie_primeEncouragement'=>3000,
            'categorie_primeSante'=>3000,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>3000,
            'categorie_primeSemestrielle'=>25000,
            'categorie_primeOuvertureCompte'=>7000,
        ]);
        DB::table('categories')->insert([
            'nomCategorie'=> 'Stagiaire',
            'categorie_salaireDeBase'=> 35000,
            'categorie_primeCaisse'=>0,
            'categorie_primeAnciennete'=>0,
            'categorie_primeResponsabilite'=>0,
            'categorie_indemniteLogement'=>0,
            'categorie_indemniteRepresentation'=>0,
            'categorie_primeHabillement'=>0,
            'categorie_primeDeplacement'=>0,
            'categorie_primeEncouragement'=>0,
            'categorie_primeSante'=>0,
            'categorie_primeTerrain'=>0,
            'categorie_primeJourFerie'=>0,
            'categorie_primeSemestrielle'=>0,
            'categorie_primeOuvertureCompte'=>0,
        ]);
    }
}
