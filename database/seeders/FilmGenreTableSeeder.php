<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilmGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_genre')->insert([
<<<<<<< Updated upstream
            //Kung Fury
            [
                'film_id'=>1,
                'genre_id'=>7,
            ],
            [
                'film_id'=>1,
                'genre_id'=>1,
            ],
            //À la folie... pas du tout
            [
                'film_id'=>2,
                'genre_id'=>8,
            ],
            [
                'film_id'=>2,
                'genre_id'=>2,
            ],
            //The End of Evangelion
            [
                'film_id'=>3,
                'genre_id'=>9,
            ],
            [
                'film_id'=>3,
                'genre_id'=>7,
            ],
            [
                'film_id'=>3,
                'genre_id'=>10,
            ],
            //Terminator 1
            [
                'film_id'=>4,
                'genre_id'=>7,
            ],
            [
                'film_id'=>4,
                'genre_id'=>3,
            ],
            //Terminator 2
            [
                'film_id'=>5,
                'genre_id'=>7,
            ],
            [
                'film_id'=>5,
                'genre_id'=>3,
            ],
            //Perceval le Gallois
            [
                'film_id'=>6,
                'genre_id'=>10,
            ],
            [
                'film_id'=>5,
                'genre_id'=>8,
            ],
            //Fight Club 
            [
                'film_id'=>7,
                'genre_id'=>10,
            ],
            //Behind the Curve
            [
                'film_id'=>8,
                'genre_id'=>5,
            ],
            //The Hateful Eight
            [
                'film_id'=>9,
                'genre_id'=>4,
            ],
            [
                'film_id'=>9,
                'genre_id'=>10,
            ],
            [
                'film_id'=>9,
                'genre_id'=>11,
            ],
            //Walk Hard
            [
                'film_id'=>10,
                'genre_id'=>1,
            ]
=======
        //Kung Fury
        [
            'film_id'=>1,
            'genre_id'=>7,
        ],
        [
            'film_id'=>1,
            'genre_id'=>1,
        ],
        //À la folie... pas du tout
        [
            'film_id'=>2,
            'genre_id'=>8,
        ],
        [
            'film_id'=>2,
            'genre_id'=>2,
        ],
        //The End of Evangelion
        [
            'film_id'=>3,
            'genre_id'=>9,
        ],
        [
            'film_id'=>3,
            'genre_id'=>7,
        ],
        [
            'film_id'=>3,
            'genre_id'=>10,
        ],
        //Terminator 1
        [
            'film_id'=>4,
            'genre_id'=>7,
        ],
        [
            'film_id'=>4,
            'genre_id'=>3,
        ],
        //Terminator 2
        [
            'film_id'=>5,
            'genre_id'=>7,
        ],
        [
            'film_id'=>5,
            'genre_id'=>3,
        ],
        //Perceval le Gallois
        [
            'film_id'=>6,
            'genre_id'=>10,
        ],
        [
            'film_id'=>5,
            'genre_id'=>8,
        ],
        //Fight Club 
        [
            'film_id'=>7,
            'genre_id'=>10,
        ],
        //Behind the Curve
        [
            'film_id'=>8,
            'genre_id'=>5,
        ],
        //The Hateful Eight
        [
            'film_id'=>9,
            'genre_id'=>4,
        ],
        [
            'film_id'=>9,
            'genre_id'=>10,
        ],
        [
            'film_id'=>9,
            'genre_id'=>11,
        ],
        //Walk Hard
        [
            'film_id'=>10,
            'genre_id'=>1,
        ],
>>>>>>> Stashed changes
        ]);
    }
}
