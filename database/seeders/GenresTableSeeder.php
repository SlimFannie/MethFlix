<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id'=>1,
                'genre'=>'Comédie'
            ],
            [
                'id'=>2,
                'genre'=>'Thriller'
            ],
            [
                'id'=>3,
                'genre'=>'Science-fiction'
            ],
            [
                'id'=>4,
                'genre'=>'Historique'
            ],
            [
                'id'=>5,
                'genre'=>'Documentaire'
            ],
            [
                'id'=>6,
                'genre'=>'Western'
            ],
        ]);
    }
}
