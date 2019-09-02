<?php

use Illuminate\Database\Seeder;
use DB;

class contratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'libelleContrat'=>Str::random(10);
        ])
    }
}
