<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contrats')->insert([
            'libelleContrat'=> 'CDI'
        ]);
        DB::table('contrats')->insert([
            'libelleContrat'=> 'Essai'
        ]);
        DB::table('contrats')->insert([
            'libelleContrat'=> 'Stage'
        ]);
    }
}
