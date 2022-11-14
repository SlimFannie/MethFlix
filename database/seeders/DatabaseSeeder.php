<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Données de base

        //Données de test
        $this->call(GenresTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(FilmGenreTableSeeder::class);
    }
}
