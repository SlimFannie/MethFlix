<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'titre'=>'Kung Fury',
                'resume'=>'En 1985, Kung Fury, policier de Miami et légende des arts martiaux, retourne dans le temps pour tuer le pire criminel de l\'Histoire - Kung Führer, alias Adolf Hitler.',
                'annee'=>2015,
                'pays'=>'Suède',
                'genre_id'=>1,
                'img'=>'https://i0.wp.com/cypruscomiccon.org/wp-content/uploads/2015/08/Kung_Fury_poster.jpg';
            ],
        ]);
    }
}
