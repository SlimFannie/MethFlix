<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ActeurFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*

        ID des films:
        Kung Fury ::::::::::::::::: 1
        À la folie... pas du tout : 2
        The End of Evangelion ::::: 3
        Terminator 1 :::::::::::::: 4
        Terminator 2 :::::::::::::: 5
        Perceval le Gallois ::::::: 6
        Fight Club :::::::::::::::: 7
        Behind The Curve :::::::::: 8
        The Hateful Eight ::::::::: 9

        ID des acteurs:
        David Sandberg :::: 1
        Jorma Taccone ::::: 2
        David Hasselhoff :: 3
        Audrey Tautou ::::: 4
        Samuel Le Bihan ::: 5
        Megumi Ogata :::::: 6
        Yuko Miyamura ::::: 7
        Arnold :::::::::::: 8
        Linda Hamilton :::: 9
        Michael Biehn ::::: 10
        Edward Furlong :::: 11
        Robert Patrick :::: 12
        Fabrice Luchini ::: 13
        Brad Pitt ::::::::: 14
        Edward Norton ::::: 15
        Samuel L. Jackson : 16
        Kurt Russell :::::: 17
        Jennifer Leigh :::: 18
        Tim Roth :::::::::: 19
        Walton Goggins :::: 20
        John C. Reilly :::: 21
        Tim Meadows ::::::: 22
        Jenna Fischer ::::: 23

        */
        DB::table('acteur_film')->insert([
            //Kung Fury
                //David Sandberg
            [
                'film_id'=>1,
                'acteur_id'=>1,
            ],
                //Jerma Taccone
            [
                'film_id'=>1,
                'acteur_id'=>2,
            ],
                //David Hasselhoff
            [
                'film_id'=>1,
                'acteur_id'=>3,
            ],
            //À la folie
                //Audrey Tautou
            [
                'film_id'=>2,
                'acteur_id'=>4,
            ],
                //Samuel Le Bihan
            [
                'film_id'=>2,
                'acteur_id'=>5,
            ],
            //The End of Evangelion
                //Megumi Ogata
            [
                'film_id'=>3,
                'acteur_id'=>6,
            ],
                //Yuko Miyamura
            [
                'film_id'=>3,
                'acteur_id'=>7,
            ],
            //Terminator 1
                //Arnold
            [
                'film_id'=>4,
                'acteur_id'=>8,
            ],
                //Linda Hamilton
            [
                'film_id'=>4,
                'acteur_id'=>9,
            ],
                //Michael Biehn
            [
                'film_id'=>4,
                'acteur_id'=>10,
            ],
            //Terminator 2
                //Arnold
            [
                'film_id'=>5,
                'acteur_id'=>8,
            ],
                //Linda Hamilton
            [
                'film_id'=>5,
                'acteur_id'=>9,
            ],
                //Edward Furlong
            [
                'film_id'=>5,
                'acteur_id'=>11,
            ],
                //Robert Patrick
            [
                'film_id'=>5,
                'acteur_id'=>12,
            ],
            //Perceval
                //Luchini
            [
                'film_id'=>6,
                'acteur_id'=>13,
            ],
            //Fight Club
                //Brad Pitt
            [
                'film_id'=>7,
                'acteur_id'=>14,
            ],
                //Edward Norton
            [
                'film_id'=>7,
                'acteur_id'=>15,
            ],
            //The Hatefull Eight
                //Samuel L. Jackson
            [
                'film_id'=>9,
                'acteur_id'=>16,
            ],
                //Kurt Russell
            [
                'film_id'=>9,
                'acteur_id'=>17,
            ],
                //Jennifer Leigh
            [
                'film_id'=>9,
                'acteur_id'=>18,
            ],
                //Tim Roth
            [
                'film_id'=>9,
                'acteur_id'=>19,
            ],
            [
                'film_id'=>9,
                'acteur_id'=>20,
            ],
            //Walk Hard
                //John C. Reilly
            [
                'film_id'=>10,
                'acteur_id'=>21,
            ],
                //Tim Meadows
            [
                'film_id'=>10,
                'acteur_id'=>22,
            ],
                //Jenna Fischer
            [
                'film_id'=>10,
                'acteur_id'=>23,
            ],
        ]);
    }
}
