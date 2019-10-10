<?php

use Illuminate\Database\Seeder;
use Database\seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    
        public function run()
        {
            for ($i = 1; $i < 11; $i++) {
                DB::table('employes')->insert(['nom' => 'Country ' . $i, 'numMat' => Str::random(4)]);
            }
            
        }

    
}
