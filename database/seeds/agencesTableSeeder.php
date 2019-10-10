<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agences')->insert([
            'nomAgence' => 'Siege',
            'addrAgence' => 'Agoe',
            'numTelAgence' => 90181797
        ]);
        DB::table('agences')->insert([
            'nomAgence' => 'Kegue',
            'addrAgence' => 'Kegue',
            'numTelAgence' => 90181797
        ]);
        DB::table('agences')->insert([
            'nomAgence' => 'Tsevie',
            'addrAgence' => 'Tsevie',
            'numTelAgence' => 90181797
        ]);
        DB::table('agences')->insert([
            'nomAgence' => 'Adidogome',
            'addrAgence' => 'Adidogome',
            'numTelAgence' => 90181797
        ]);
        DB::table('agences')->insert([
            'nomAgence' => 'Avepozo',
            'addrAgence' => 'Avepozo',
            'numTelAgence' => 90181797
        ]);
    }
}
