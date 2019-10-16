<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            'libellePoste'=>'Directeur Général',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Directeur Financier',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Directeur de l\'Exploitation',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Directeur de l\'Audit Interne',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Directeur des Affaires Juridiques et RH',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Chef d\'agence',
            'categorie_id'=>1
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Chef du service crédit',
            'categorie_id'=>2
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Gestionnaire de portefeuilles',
            'categorie_id'=>2
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Comptables',
            'categorie_id'=>3
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Caissiers',
            'categorie_id'=>4
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Auditeur',
            'categorie_id'=>5
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Secrétaire',
            'categorie_id'=>5
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Promoteur',
            'categorie_id'=>5
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Agent de sécurité',
            'categorie_id'=>6
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Agent d\'entretien',
            'categorie_id'=>6
        ]);
        DB::table('postes')->insert([
            'libellePoste'=>'Stagiaire',
            'categorie_id'=>7
        ]);
    }
}
