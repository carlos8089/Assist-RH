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
            $this->call([
                agencesTableSeeder::class,
                categoriesTableSeeder::class,
                contratsTableSeeder::class,
                employesTableSeeder::class,
                postesTableSeeder::class,
            ]);
            
            
        }

    
}
