<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acteurs')->insert([
            //Les acteurs de Kung Fury
            [
                'nom'=>'Sandberg',
                'prenom'=>'David',
                'img'=>'https://imgsrc.cineserie.com/2016/08/350064.jpg',
            ],
            [
                'nom'=>'Taccone',
                'prenom'=>'Jorma',
                'img'=>'https://m.media-amazon.com/images/M/MV5BMjE4OTU0ODU3Ml5BMl5BanBnXkFtZTgwMjE3MzczNzE@._V1_.jpg',
            ],
            [
                'nom'=>'Hasselhoff',
                'prenom'=>'David',
                'img'=>'https://www.al.com/resizer/x0sDT9S7MVuLoZdAckv4GYrEay8=/1280x0/smart/advancelocal-adapter-image-uploads.s3.amazonaws.com/image.al.com/home/bama-media/width2048/img/entertainment_impact/photo/22643993-large.jpg',
            ],
            //Les acteurs de À la folie...
            [
                'nom'=>'Tautou',
                'prenom'=>'Audrey',
                'img'=>'http://1.bp.blogspot.com/-YeR2-nzGZcE/UVdilxp1GRI/AAAAAAAAAlE/DPwjpE56mMQ/s1600/timthum1b.php.jpeg',
            ],
            [
                'nom'=>'Le Bihan',
                'prenom'=>'Samuel',
                'img'=>'https://i.pmdstatic.net/tel/2021/06/21/47ce8c18-6062-4b16-bdbf-f9061ab30082.jpeg',
            ],
            //Les acteurs de The End of Evangelion
            [
                'nom'=>'Ogata',
                'prenom'=>'Megumi',
                'img'=>'https://static.wikia.nocookie.net/ultra/images/5/50/41IqyyZMCyL.jpg',
            ],
            [
                'nom'=>'Miyamura',
                'prenom'=>'Yûko',
                'img'=>'https://static.wikia.nocookie.net/evangelion/images/d/d2/Yuko_miyamura.png',
            ],
            //Les acteurs de Terminator
            [
                'nom'=>'Schwarzenegger',
                'prenom'=>'Arnold',
                'img'=>'https://image-cdn.essentiallysports.com/wp-content/uploads/Screenshot-2022-10-29-144724.jpg',
            ],
        ]);
    }
}
