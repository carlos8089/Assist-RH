<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class employeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employes')->insert([
            'nom'=>Str::random(10);
            'prenoms'=>Str::random(10);
            'dateNais'=>Str::random(10);
            'lieuNais'=>Str::random(10);
            'sitMat'=>Str::random(10);
            'addr'=>Str::random(10);
            'numMat'=>Str::random(10);
            'poste'=>Str::random(10);
            'agence'=>Str::random(10);
            'contrat'=>Str::random(10);
            
        ])
    }
}
