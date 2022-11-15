<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
            //1
            [
                'titre'=>'Kung Fury',
                'resume'=>'En 1985, Kung Fury, policier de Miami et légende des arts martiaux, retourne dans le temps pour tuer le pire criminel de l\'Histoire - Kung Führer, alias Adolf Hitler.',
                'annee'=>2015,
                'pays'=>'Suède',
                'minutes'=>31,
                'img'=>'https://i0.wp.com/cypruscomiccon.org/wp-content/uploads/2015/08/Kung_Fury_poster.jpg'
            ],
            //2
            [
                'titre'=>'À la folie... pas du tout',
                'resume'=>'Angélique, jeune fille d\'une vingtaine d\'années, étudiante aux Beaux-arts, tombe amoureuse de Loïc, un cardiologue renommé, marié et futur papa. Elle est intimement persuadée que c\'est son grand amour, mais Loïc ne se rend pas aux rendez-vous qu\'elle organise et elle ne comprend pas pourquoi il se montre si distant avec elle, alors qu\'elle l\'aime tant.',
                'annee'=>2002,
                'pays'=>'France',
                'minutes'=>92,
                'img'=>'https://www.cine-feuilles.ch/storage/app/uploads/public/5a3/d11/f25/thumb_15664_360_480_0_0_auto.jpg'
            ],
            //3
            [
                'titre'=>'Shin Seiki Evangelion gekijōban: Ea/Magokoro o, kimi ni',
                'resume'=>'Après la défaite du dernier Angel, Shinji Ikari tombe dans une dépression profonde. Quand la SEELE ordonne que au JSSDF de faire une attaque surprise sur le quartier général de la NERV, Gendo Ikari prend la fuite avec Rei Ayanami, où il tente de de mener à bien le Plan de Complémentarité de l\Homme. Shinji, aux limites de sa santé mentale, doit décider du sort de l\humanité.',
                'annee'=>1997,
                'pays'=>'Japon',
                'minutes'=>87,
                'img'=>'https://m.media-amazon.com/images/M/MV5BMjU0MzQwMmMtMWU3OS00MDc0LWIzOTItZmE1MjZlYmExMGJiXkEyXkFqcGdeQXVyNzI1NzMxNzM@._V1_.jpg'
            ],
            //4
            [
                'titre'=>'The Terminator',
                'resume'=>'En 2029, une guerre oppose ce qui reste de l\'humanité — décimée par un holocauste nucléaire — aux machines dirigées par Skynet, un système informatique contrôlé par une intelligence artificielle qui a pour objectif la suprématie des Machines sur les hommes.

                La résistance humaine, menée par John Connor, étant sur le point de triompher en 2029, Skynet envoie dans le passé, en 1984, un Terminator, un assassin cybernétique à l\'apparence humaine, afin de tuer la mère de John, Sarah Connor, et ainsi d\'empêcher la naissance de John, « effaçant » de manière rétroactive son existence et ses actes futurs. En réaction, John envoie à la même époque Kyle Reese, un résistant humain, afin de protéger sa mère.',
                'annee'=>1984,
                'pays'=>'États-Unis',
                'minutes'=>167,
                'img'=>'https://m.media-amazon.com/images/M/MV5BMjAyMTk3ODA2MF5BMl5BanBnXkFtZTcwMTkzNDQyNA@@._V1_.jpg'
            ],
            //5
            [
                'titre'=>'Terminator 2: Judgement Day',
                'resume'=>'Skynet envoie de nouveau un tueur cybernétique, cette fois-ci en 1995, quelque temps avant le début de la guerre atomique de 1997, pour cette fois-ci tenter d\'éliminer directement John Connor, encore enfant à cette époquea. Mais, dans le même temps, la résistance humaine envoie elle aussi à cette époque un individu pour protéger John.',
                'annee'=>1991,
                'pays'=>'États-Unis',
                'minutes'=>137,
                'img'=>'https://m.media-amazon.com/images/M/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg'
            ],
            //6
            [
                'titre'=>'Perceval le Gallois',
                'resume'=>'Comment Perceval le Gallois, de valet, devient chevalier en quête du Graal. Il sort un jour de sa maison enfouie dans la forêt et découvre les chevaliers... Peu à peu, il subit une initiation qui le rend fort et plus téméraire que jamais.',
                'annee'=>1978,
                'pays'=>'France',
                'minutes'=>140,
                'img'=>'https://m.media-amazon.com/images/M/MV5BYmNjYWIyYmYtNDc5Yy00ZDM0LWJkMzktZDQ1MTkzNmQ0MTU3XkEyXkFqcGdeQXVyMjMxOTgyNTU@._V1_.jpg'
            ],
            //7
            [
                'titre'=>'Fight Club',
                'resume'=>'Un fonctionnaire insomniaque et un fabriquant de savon téméraire fondent un club de combat clandestin.',
                'annee'=>1999,
                'pays'=>'États-Unis',
                'minutes'=>139,
                'img'=>'https://m.media-amazon.com/images/M/MV5BYmNjYWIyYmYtNDc5Yy00ZDM0LWJkMzktZDQ1MTkzNmQ0MTU3XkEyXkFqcGdeQXVyMjMxOTgyNTU@._V1_.jpg'
            ],
            //8
            [
                'titre'=>'Behind the Curve',
                'resume'=>'Découvrez une communauté mondiale grandissante de théoriciens qui pensent que la Terre est plate dans une société qui rejette violemment cette croyance.',
                'annee'=>2018,
                'pays'=>'États-Unis',
                'minutes'=>96,
                'img'=>'https://m.media-amazon.com/images/M/MV5BNjE5YzBhYTYtNzYxMy00ZGJmLWFhZmQtMDQ1YmRiNmVhYjdmXkEyXkFqcGdeQXVyOTM5Nzc0Mw@@._V1_.jpg'
            ],
            //9
            [
                'titre'=>'The Hateful Eight',
                'resume'=>'Quelques années après la guerre de Sécession, le cocher O.B. Jackson conduit dans sa diligence le chasseur de primes John Ruth et sa prisonnière, Daisy Domergue, jusqu\'à Red Rock dans le Wyoming. Ils rencontrent sur la route le major Marquis Warren, un ancien soldat de l\'Union et chasseur de primes, et Chris Mannix, le nouveau shérif de Red Rock. Surpris par le blizzard, les cinq personnes trouvent refuge dans un chalet où sont déjà installés quatre autres personnes : Bob, qui s\'occupe du relais en l\'absence de la propriétaire, Oswaldo Mobray, le bourreau de Red Rock, le conducteur de troupeaux Joe Gage et le général confédéré Sanford Smithers.',
                'annee'=>2015,
                'pays'=>'États-Unis',
                'minutes'=>168,
                'img'=>'https://m.media-amazon.com/images/M/MV5BNjE5YzBhYTYtNzYxMy00ZGJmLWFhZmQtMDQ1YmRiNmVhYjdmXkEyXkFqcGdeQXVyOTM5Nzc0Mw@@._V1_.jpg'
            ],
            //10
            [
                'titre'=>'Walk Hard: The Dewey Cox Story',
                'resume'=>'Le chanteur Dewey Cox surmonte l\'adversité pour devenir une légende musicale.',
                'annee'=>2007,
                'pays'=>'Québec',
                'minutes'=>96,
                'img'=>'https://m.media-amazon.com/images/M/MV5BMzAxNmRkODctY2ExMC00NjQwLTgwZDgtMjJiMGYxNWYyOTBkXkEyXkFqcGdeQXVyNTE1NjY5Mg@@._V1_FMjpg_UX1000_.jpg'
            ],
        ]);
    }
}
