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
        DB::table('categories')->insert([
            'nomAgence'=>Str::random(10);
            'addrAgence'=>Str::random(10);
            'numTelAgence'=>rand(10);
        ])
    }
}
