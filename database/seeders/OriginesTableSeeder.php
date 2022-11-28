<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OriginesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('origines')->insert([
            [
            'pays'=>'Suède' 
            ],
            [
            'pays'=>'France',
            ],
            [
            'pays'=>'Japon',    
            ],
            [
            'pays'=>'États-unis'    
            ]
        ]);
    }
}
