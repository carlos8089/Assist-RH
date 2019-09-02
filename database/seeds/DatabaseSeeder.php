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
            for ($i = 1; $i < 21; $i++) {
                DB::table('users')->insert(['name' => 'City ' . $i, 'email' => Str::random(8).'@gmail.com', 'password'=>Str::random(10)]);
            }
            for ($i = 1; $i < 21; $i++) {
                DB::table('bulletins')->insert(['salaireDeBase' => random_int(6,8), 'employe_id' => rand(1, 20)]);
            }
        }

    
}
