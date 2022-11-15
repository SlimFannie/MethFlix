<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
            [
                'nom'=>'Hamilton',
                'prenom'=>'Linda',
                'img'=>'https://www.instyle.com/thmb/ze96YUQiqVjECy_TIPHHQ4vIGKc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/linda-hamilton-01-2000-9b048ed353a141d187173998adb21276.jpg',
            ],
            [
                'nom'=>'Biehn',
                'prenom'=>'Michael',
                'img'=>'https://i.wpimg.pl/958x0/d.wpimg.pl/953301186-977779226/michael-biehn.png',
            ],
            //+ Terminator 2 (Biehn n'est pas dans le 2)
            [
                'nom'=>'Furlong',
                'prenom'=>'Edward',
                'img'=>'https://i0.wp.com/bloody-disgusting.com/wp-content/uploads/2022/10/thumbnail-1.jpeg',
            ],
            [
                'nom'=>'Patrick',
                'prenom'=>'Robert',
                'img'=>'https://www1.pictures.zimbio.com/gi/Robert+Patrick+2015+Sundance+Film+Festival+7Px0dF8KeA-l.jpg',
            ],
            //Perceval le Gallois
            [
                'nom'=>'Luchini',
                'prenom'=>'Fabrice',
                'img'=>'https://www.hachette.fr/sites/default/files/images/intervenants/000000085694_L_F_LUCHINI_0714_0235_nb.jpg',
            ],
            //Fight Club
            [
                'nom'=>'Pitt',
                'prenom'=>'Brad',
                'img'=>'https://media-assets.vanityfair.it/photos/62d4fbab6a5321bf55554afd/master/pass/OLIVIER%20VIGERIE_BULLET%20TRAIN%20PHOTOCALL_Brad%20Pitt_16%20July%202022_040158.jpg',
            ],
            [
                'nom'=>'Norton',
                'prenom'=>'Edward',
                'img'=>'https://i.pinimg.com/736x/a4/46/12/a4461284567be4d5ce77566601cb65fe--male-celebrities-celebs.jpg',
            ],
            //Behind The Curve a pas vraiment d'acteurs...
            //The Hateful Eight a vraiment beaucoup d'acteurs importants lmao
            [
                'nom'=>'Jackson',
                'prenom'=>'Samuel L.',
                'img'=>'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/03/04/16464187935556.jpg',
            ],
            [
                'nom'=>'Russell',
                'prenom'=>'Kurt',
                'img'=>'https://imageio.forbes.com/blogs-images/csylt/files/2018/04/KR-harvest-e1524964403949.jpg',
            ],
            [
                'nom'=>'Leigh',
                'prenom'=>'Jennifer',
                'img'=>'https://static01.nyt.com/images/2015/12/28/arts/28LEIGH/28LEIGH-articleLarge.jpg',
            ],
            [
                'nom'=>'Roth',
                'prenom'=>'Tim',
                'img'=>'https://en.24smi.org/public/media/resize/660x-/celebrity/2019/02/22/1mdncokgil6o-tim-roth.jpg',
            ],
            [
                'nom'=>'Goggins',
                'prenom'=>'Walton',
                'img'=>'https://static.spin.com/files/DU-AC-061186.jpeg',
            ],
            //Walk Hard
            [
                'nom'=>'Reilly',
                'prenom'=>'John C.',
                'img'=>'https://media.gq.com/photos/6304feb9bfed27e620fe0d58/master/w_1600%2Cc_limit/GQ0922_Reilly_04.jpg',
            ],
            [
                'nom'=>'Meadows',
                'prenom'=>'Tim',
                'img'=>'https://thumb.spokesman.com/7wWlIunsD7H4Qf9iDkTLgiwoqbg=/1200x0/media.spokesman.com/photos/2022/03/16/6231d38b577fd.hires.jpg',
            ],
            [
                'nom'=>'Fischer',
                'prenom'=>'Jenna',
                'img'=>'https://image.gala.de/21607378/t/AS/v1/w1440/r1/-/jenna-fischer.jpg',
            ],
        ]);
    }
}
