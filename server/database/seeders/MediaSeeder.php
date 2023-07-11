<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'FRUITS BASKET',
            'description' => 'Fruits Basket tells the story of Tohru Honda, an orphan girl who, after meeting Yuki, Kyo, and Shigure Sohma, learns that 13 members of the Sohma family are possessed by the animals of the Chinese zodiac and are cursed to turn into their animal forms when they are weak, stressed, or when they are embraced by anyone of ...',
            'image_url' => 'https://www.crunchyroll.com/imgsrv/display/thumbnail/1200x675/catalog/crunchyroll/c991780212f588bb40431529a2fc1e5f.jpe',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 1,
            'episodes_count' => 1,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 1,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/1.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 2,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/2.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 3,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/3.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 4,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/4.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 5,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/5.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 6,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/6.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 7,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/7.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 8,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/8.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 9,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/9.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 10,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/10.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 11,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/11.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 12,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/12.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 13,
            'base_media_url' => 'https://lightspeedst.net/s2/mp4/fruits-basket-the-final/sd/13.mp4'
        ]);




        // 
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'MAOU GAKUIN NO FUTEKIGOUSHA',
            'description' => 'Depois de 2000 anos, o cruel demônio acabou de reencarnar! Mas sua aptidão em uma academia para nutrir candidatos a senhores demônios é "inepta" !? No entanto, o que o esperava após sua reencarnação é um mundo muito acostumado à paz que seus descendentes se tornaram fracos demais devido a um enorme enfraquecimento dos poderes mágicos.',
            'image_url' => 'https://www.fajarpendidikan.co.id/wp-content/uploads/2023/01/Maou-Gakuin-S2.jpg',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 2,
            'episodes_count' => 19,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 1,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/1.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 2,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/2.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 3,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/3.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 4,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/4.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 5,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/5.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 6,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/6.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 7,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/7.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 8,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/8.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 9,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/9.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 10,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/10.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 11,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/11.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 12,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/12.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 13,
            'base_media_url' => 'https://lightspeedst.net/s3/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e/sd/13.mp4'
        ]);


        // season 2
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 1,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/1.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 2,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/2.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 3,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/3.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 4,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/4.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 5,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/5.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 6,
            'base_media_url' => 'https://lightspeedst.net/s5/mp4/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-ii/hd/6.mp4'
        ]);

        // Dr.stone (The Movie)
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Dr.Stone: Ryuusui (The Movie)',
            'description' => 'Filme ponte entre a segunda e a terceira temporada.',
            'image_url' => 'https://www.hindustantimes.com/ht-img/img/2023/04/12/1600x900/Dr_stone_season_3_episode_2_1681311489216_1681311498338_1681311498338.jpg',
            'trailer_url' => '',
            'type' => 'MOVIE',
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 6,
            'base_media_url' => 'https://lightspeedst.net/s4/mp4/dr-stone-ryuusui/sd/1.mp4'
        ]);


        // Dr.stone
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Dr.Stone',
            'description' => 'Um dia fatídico, toda a humanidade foi petrificada por um flash ofuscante de luz. Depois de vários milênios, o colegial Taiju desperta e se vê perdido em um mundo de estátuas. No entanto, ele não está sozinho! Seu amigo Senku, amigo da ciência, está pronto para trabalhar há alguns meses e tem um grande plano em mente - para dar início à civilização com o poder da ciência! ',
            'image_url' => 'https://zonacritica.com.br/wp-content/uploads/2023/04/dr-stone.jpg',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 3,
            'episodes_count' => 46,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/dr-stone-new-world/1/720p.mp4",
            "season" => 3,
            "episode" => 1
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/dr-stone-new-world/2/720p.mp4",
            "season" => 3,
            "episode" => 2
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/dr-stone-new-world/3/720p.mp4",
            "season" => 3,
            "episode" => 3
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/4/720p.mp4",
            "season" => 3,
            "episode" => 4
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/5/720p.mp4",
            "season" => 3,
            "episode" => 5
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/6/720p.mp4",
            "season" => 3,
            "episode" => 6
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/7/720p.mp4",
            "season" => 3,
            "episode" => 7
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/8/720p.mp4",
            "season" => 3,
            "episode" => 8
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/9/720p.mp4",
            "season" => 3,
            "episode" => 9
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/10/720p.mp4",
            "season" => 3,
            "episode" => 10
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id,
            "base_media_url" => "https://s2.lightspeedst.net/s1/mp4_temp/dr-stone-new-world/11/720p.mp4",
            "season" => 3,
            "episode" => 11
        ]);



        // Hell's Paradise
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Hell\'s Paradise',
            'description' => 'Gabimaru the Hollow, um ninja da vila de Iwagakure conhecido por ser frio e sem emoção. No entanto, esta ilha não é uma ilha normal: acredita-se que seja o Paraíso. No entanto, a ilha está cheia de mistérios, e a equipe de exploração - formada por pessoas marcadas para a morte - pode não estar totalmente preparada para lidar com eles.',
            'image_url' => 'https://p2.trrsf.com/image/fget/cf/1200/675/middle/images.terra.com/2023/05/18/hells-paradise-capa-vf3povbl71pd.jpg',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 3,
            'episodes_count' => 46,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s5/mp4/jigokuraku/hd/1.mp4",
            "season" => 1,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/jigokuraku/2/720p.mp4",
            "season" => 1,
            "episode" => 2
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/jigokuraku/3/720p.mp4",
            "season" => 1,
            "episode" => 3
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s5/mp4/jigokuraku/hd/4.mp4",
            "season" => 1,
            "episode" => 4
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/5.mp4",
            "season" => 1,
            "episode" => 5
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/6.mp4",
            "season" => 1,
            "episode" => 6
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/7.mp4",
            "season" => 1,
            "episode" => 7
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/8.mp4",
            "season" => 1,
            "episode" => 8
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/9.mp4",
            "season" => 1,
            "episode" => 9
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/10.mp4",
            "season" => 1,
            "episode" => 10
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/11.mp4",
            "season" => 1,
            "episode" => 11
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/12.mp4",
            "season" => 1,
            "episode" => 12
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/jigokuraku/hd/13.mp4",
            "season" => 1,
            "episode" => 13
        ]);


        // mushuku tensei
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Mushoku Tensei',
            'description' => 'Morto enquanto salvava um estranho de uma colisão de trânsito, um NEET de 34 anos reencarnou em um mundo de magia como Rudeus Greyrat, um bebê recém-nascido. Com conhecimento, experiência e arrependimentos de sua vida anterior retidos, Rudeus jura levar uma vida plena e não repetir seus erros anteriores. Agora dotado de uma tremenda quantidade de poder mágico, bem como a mente de um adulto, Rudeus é visto como um gênio em formação por seus novos pais. Logo, ele se encontra estudando com poderosos guerreiros, como seu pai espadachim e um mago chamado Roxy Migurdia - tudo para aprimorar seus aparentes talentos. Mas, apesar de seu exterior inocente, Rudeus ainda é um otaku pervertido, que usa sua riqueza de conhecimento para fazer movimentos com mulheres que ele nunca poderia fazer em sua vida anterior.',
            'image_url' => 'https://www.justwatch.com/images/backdrop/242788565/s640/mushoku-tensei-jobless-reincarnation',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 2,
            'episodes_count' => 46,
        ]);
        // season 2
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/fhd/1.mp4",
            "season" => 2,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4_temp/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/2/720p.mp4",
            "season" => 2,
            "episode" => 2
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/3.mp4",
            "season" => 2,
            "episode" => 3
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/4.mp4",
            "season" => 2,
            "episode" => 4
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/5.mp4",
            "season" => 2,
            "episode" => 5
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4_temp/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/6/720p.mp4",
            "season" => 2,
            "episode" => 6
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/sd/7.mp4",
            "season" => 2,
            "episode" => 7
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/8.mp4",
            "season" => 2,
            "episode" => 8
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/9.mp4",
            "season" => 2,
            "episode" => 9
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/10.mp4",
            "season" => 2,
            "episode" => 10
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/hd/11.mp4",
            "season" => 2,
            "episode" => 11
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4_temp/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season/12/720p.mp4",
            "season" => 2,
            "episode" => 12
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 2, 'episode' => 13,
            'title' => '(EXTRA)',
            'base_media_url' => 'https://s2.lightspeedst.net/s1/mp4/mushoku-tensei-ii-sekai-ittara-honki-dasu/sd/0.mp4'
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/mushoku-tensei-ii-sekai-ittara-honki-dasu/hd/0.mp4",
            "season" => 3,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/mushoku-tensei-ii-sekai-ittara-honki-dasu/fhd/1.mp4",
            "season" => 3,
            "episode" => 2
        ]);


        // Jujutsu Kaisen Movie
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Jujutsu Kaisen 0 - The Movie',
            'description' => 'Yuuta começa a encontrar seu lugar no mundo e, pela primeira vez, a se sentir confortável com suas habilidades. No entanto, conforme seu treinamento progride, Yuuta aprende que os perigos do mundo do Jujutsu vão muito além dos espíritos malignos.',
            'image_url' => 'https://www.centralcomics.com/wp-content/uploads/2022/05/39dbf905-d8e2-4e98-8cb4-68c40b87550d.jpg',
            'trailer_url' => '',
            'type' => 'MOVIE',
            'seasons_count' => 1,
            'episodes_count' => 1,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, 'season' => 1, 'episode' => 1, 'base_media_url' => 'https://lightspeedst.net/s4/mp4/jujutsu-kaisen-0-movie/sd/1.mp4'
        ]);




        // Sacrificial Princess and the King of Beasts
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Sacrificial Princess and the King of Beasts',
            'description' => ' Cem anos atrás, houve uma grande guerra entre a humanidade e as feras. Assim que a guerra terminou, foi proposta uma tradição anual em que um sacrifício feminino seria retirado dos humanos para ser comido pelo Rei das Feras',
            'image_url' => 'https://www.neonsakura.ca/wp-content/uploads/2023/05/sacrificial_princess_and_the_king_of_beasts_header.jpg',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 1,
            'episodes_count' => 13,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s5/mp4_temp/niehime-to-kemono-no-ou/1/720p.mp4",
            "season" => 1,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/2.mp4",
            "season" => 1,
            "episode" => 2
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/3.mp4",
            "season" => 1,
            "episode" => 3
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/4.mp4",
            "season" => 1,
            "episode" => 4
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/5.mp4",
            "season" => 1,
            "episode" => 5
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/6.mp4",
            "season" => 1,
            "episode" => 6
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/7.mp4",
            "season" => 1,
            "episode" => 7
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/8.mp4",
            "season" => 1,
            "episode" => 8
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/9.mp4",
            "season" => 1,
            "episode" => 9
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/10.mp4",
            "season" => 1,
            "episode" => 10
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/11.mp4",
            "season" => 1,
            "episode" => 11
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://s2.lightspeedst.net/s1/mp4/niehime-to-kemono-no-ou/hd/12.mp4",
            "season" => 1,
            "episode" => 12
        ]);


        // Hunter x Hunter
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Hunter x Hunter',
            'description' => 'Hunter x Hunter se passa em um mundo onde Hunters existem para realizar todos os tipos de tarefas perigosas, como capturar criminosos e bravamente procurar tesouros perdidos em territórios desconhecidos. Gon Freecss, de 12 anos, está determinado a se tornar o melhor caçador possível na esperança de encontrar seu pai, que era um caçador e havia abandonado seu filho há muito tempo.',
            'image_url' => 'https://www.japanpop.fr/wp-content/uploads/2017/05/Hunter_x_Hunter-lesgicques-e1539244012703.png',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 1,
            'episodes_count' => 13,
        ]);


        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/1.mp4",
            "season" => 1,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/2.mp4",
            "season" => 1,
            "episode" => 2
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/3.mp4",
            "season" => 1,
            "episode" => 3
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/4.mp4",
            "season" => 1,
            "episode" => 4
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/5.mp4",
            "season" => 1,
            "episode" => 5
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/6.mp4",
            "season" => 1,
            "episode" => 6
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/7.mp4",
            "season" => 1,
            "episode" => 7
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/8.mp4",
            "season" => 1,
            "episode" => 8
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/9.mp4",
            "season" => 1,
            "episode" => 9
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/10.mp4",
            "season" => 1,
            "episode" => 10
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/11.mp4",
            "season" => 1,
            "episode" => 11
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/12.mp4",
            "season" => 1,
            "episode" => 12
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/13.mp4",
            "season" => 1,
            "episode" => 13
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/14.mp4",
            "season" => 1,
            "episode" => 14
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/15.mp4",
            "season" => 1,
            "episode" => 15
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/16.mp4",
            "season" => 1,
            "episode" => 16
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/17.mp4",
            "season" => 1,
            "episode" => 17
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/18.mp4",
            "season" => 1,
            "episode" => 18
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/19.mp4",
            "season" => 1,
            "episode" => 19
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/20.mp4",
            "season" => 1,
            "episode" => 20
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/21.mp4",
            "season" => 1,
            "episode" => 21
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/22.mp4",
            "season" => 1,
            "episode" => 22
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/23.mp4",
            "season" => 1,
            "episode" => 23
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/24.mp4",
            "season" => 1,
            "episode" => 24
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/25.mp4",
            "season" => 1,
            "episode" => 25
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/26.mp4",
            "season" => 1,
            "episode" => 26
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/27.mp4",
            "season" => 1,
            "episode" => 27
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/28.mp4",
            "season" => 1,
            "episode" => 28
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/29.mp4",
            "season" => 1,
            "episode" => 29
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/30.mp4",
            "season" => 1,
            "episode" => 30
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/31.mp4",
            "season" => 1,
            "episode" => 31
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/32.mp4",
            "season" => 1,
            "episode" => 32
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/33.mp4",
            "season" => 1,
            "episode" => 33
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/34.mp4",
            "season" => 1,
            "episode" => 34
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/35.mp4",
            "season" => 1,
            "episode" => 35
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/36.mp4",
            "season" => 1,
            "episode" => 36
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/37.mp4",
            "season" => 1,
            "episode" => 37
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/38.mp4",
            "season" => 1,
            "episode" => 38
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/39.mp4",
            "season" => 1,
            "episode" => 39
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/40.mp4",
            "season" => 1,
            "episode" => 40
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/41.mp4",
            "season" => 1,
            "episode" => 41
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/42.mp4",
            "season" => 1,
            "episode" => 42
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/43.mp4",
            "season" => 1,
            "episode" => 43
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/44.mp4",
            "season" => 1,
            "episode" => 44
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/45.mp4",
            "season" => 1,
            "episode" => 45
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/46.mp4",
            "season" => 1,
            "episode" => 46
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/47.mp4",
            "season" => 1,
            "episode" => 47
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/48.mp4",
            "season" => 1,
            "episode" => 48
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/49.mp4",
            "season" => 1,
            "episode" => 49
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/50.mp4",
            "season" => 1,
            "episode" => 50
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/51.mp4",
            "season" => 1,
            "episode" => 51
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/52.mp4",
            "season" => 1,
            "episode" => 52
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/53.mp4",
            "season" => 1,
            "episode" => 53
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/54.mp4",
            "season" => 1,
            "episode" => 54
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/55.mp4",
            "season" => 1,
            "episode" => 55
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/56.mp4",
            "season" => 1,
            "episode" => 56
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/57.mp4",
            "season" => 1,
            "episode" => 57
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/58.mp4",
            "season" => 1,
            "episode" => 58
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/59.mp4",
            "season" => 1,
            "episode" => 59
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/60.mp4",
            "season" => 1,
            "episode" => 60
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/61.mp4",
            "season" => 1,
            "episode" => 61
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/62.mp4",
            "season" => 1,
            "episode" => 62
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/63.mp4",
            "season" => 1,
            "episode" => 63
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/64.mp4",
            "season" => 1,
            "episode" => 64
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/65.mp4",
            "season" => 1,
            "episode" => 65
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/66.mp4",
            "season" => 1,
            "episode" => 66
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/67.mp4",
            "season" => 1,
            "episode" => 67
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/68.mp4",
            "season" => 1,
            "episode" => 68
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/69.mp4",
            "season" => 1,
            "episode" => 69
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/70.mp4",
            "season" => 1,
            "episode" => 70
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/71.mp4",
            "season" => 1,
            "episode" => 71
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/72.mp4",
            "season" => 1,
            "episode" => 72
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/73.mp4",
            "season" => 1,
            "episode" => 73
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/74.mp4",
            "season" => 1,
            "episode" => 74
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/75.mp4",
            "season" => 1,
            "episode" => 75
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/76.mp4",
            "season" => 1,
            "episode" => 76
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/77.mp4",
            "season" => 1,
            "episode" => 77
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/78.mp4",
            "season" => 1,
            "episode" => 78
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/79.mp4",
            "season" => 1,
            "episode" => 79
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/80.mp4",
            "season" => 1,
            "episode" => 80
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/81.mp4",
            "season" => 1,
            "episode" => 81
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/82.mp4",
            "season" => 1,
            "episode" => 82
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/83.mp4",
            "season" => 1,
            "episode" => 83
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/84.mp4",
            "season" => 1,
            "episode" => 84
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/85.mp4",
            "season" => 1,
            "episode" => 85
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/86.mp4",
            "season" => 1,
            "episode" => 86
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/87.mp4",
            "season" => 1,
            "episode" => 87
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/88.mp4",
            "season" => 1,
            "episode" => 88
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/89.mp4",
            "season" => 1,
            "episode" => 89
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/90.mp4",
            "season" => 1,
            "episode" => 90
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/91.mp4",
            "season" => 1,
            "episode" => 91
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/92.mp4",
            "season" => 1,
            "episode" => 92
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/93.mp4",
            "season" => 1,
            "episode" => 93
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/94.mp4",
            "season" => 1,
            "episode" => 94
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/95.mp4",
            "season" => 1,
            "episode" => 95
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/96.mp4",
            "season" => 1,
            "episode" => 96
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/97.mp4",
            "season" => 1,
            "episode" => 97
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/98.mp4",
            "season" => 1,
            "episode" => 98
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/99.mp4",
            "season" => 1,
            "episode" => 99
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/100.mp4",
            "season" => 1,
            "episode" => 100
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/101.mp4",
            "season" => 1,
            "episode" => 101
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/102.mp4",
            "season" => 1,
            "episode" => 102
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/103.mp4",
            "season" => 1,
            "episode" => 103
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/104.mp4",
            "season" => 1,
            "episode" => 104
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/105.mp4",
            "season" => 1,
            "episode" => 105
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/106.mp4",
            "season" => 1,
            "episode" => 106
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/107.mp4",
            "season" => 1,
            "episode" => 107
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/108.mp4",
            "season" => 1,
            "episode" => 108
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/109.mp4",
            "season" => 1,
            "episode" => 109
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/110.mp4",
            "season" => 1,
            "episode" => 110
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/111.mp4",
            "season" => 1,
            "episode" => 111
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/112.mp4",
            "season" => 1,
            "episode" => 112
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/113.mp4",
            "season" => 1,
            "episode" => 113
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/114.mp4",
            "season" => 1,
            "episode" => 114
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/115.mp4",
            "season" => 1,
            "episode" => 115
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/116.mp4",
            "season" => 1,
            "episode" => 116
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/117.mp4",
            "season" => 1,
            "episode" => 117
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/118.mp4",
            "season" => 1,
            "episode" => 118
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/119.mp4",
            "season" => 1,
            "episode" => 119
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/120.mp4",
            "season" => 1,
            "episode" => 120
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/121.mp4",
            "season" => 1,
            "episode" => 121
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/122.mp4",
            "season" => 1,
            "episode" => 122
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/123.mp4",
            "season" => 1,
            "episode" => 123
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/124.mp4",
            "season" => 1,
            "episode" => 124
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/125.mp4",
            "season" => 1,
            "episode" => 125
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/126.mp4",
            "season" => 1,
            "episode" => 126
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/127.mp4",
            "season" => 1,
            "episode" => 127
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/128.mp4",
            "season" => 1,
            "episode" => 128
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/129.mp4",
            "season" => 1,
            "episode" => 129
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/130.mp4",
            "season" => 1,
            "episode" => 130
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/131.mp4",
            "season" => 1,
            "episode" => 131
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/132.mp4",
            "season" => 1,
            "episode" => 132
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/133.mp4",
            "season" => 1,
            "episode" => 133
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/134.mp4",
            "season" => 1,
            "episode" => 134
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/135.mp4",
            "season" => 1,
            "episode" => 135
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/136.mp4",
            "season" => 1,
            "episode" => 136
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/137.mp4",
            "season" => 1,
            "episode" => 137
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/138.mp4",
            "season" => 1,
            "episode" => 138
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/139.mp4",
            "season" => 1,
            "episode" => 139
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/140.mp4",
            "season" => 1,
            "episode" => 140
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/141.mp4",
            "season" => 1,
            "episode" => 141
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/142.mp4",
            "season" => 1,
            "episode" => 142
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/143.mp4",
            "season" => 1,
            "episode" => 143
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/144.mp4",
            "season" => 1,
            "episode" => 144
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/145.mp4",
            "season" => 1,
            "episode" => 145
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/146.mp4",
            "season" => 1,
            "episode" => 146
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/147.mp4",
            "season" => 1,
            "episode" => 147
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/hunter-x-hunter-2011/hd/148.mp4",
            "season" => 1,
            "episode" => 148
        ]);






        // Demon Slayer
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Demon Slayer',
            'description' => ' Desde a morte de seu pai, o fardo de sustentar a família recai sobre os ombros de Tanjirou Kamado. Apesar de viver na pobreza em uma montanha remota, a família Kamado pode desfrutar de uma vida relativamente tranquila e feliz',
            'image_url' => 'https://www.jbox.com.br/wp/wp-content/uploads/2021/05/demon-slayer-especial-tv.jpg',
            'trailer_url' => '',
            'type' => 'SERIE',
            'seasons_count' => 1,
            'episodes_count' => 13,
        ]);



        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/1.mp4",
            "season" => 1,
            "episode" => 1
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/2.mp4",
            "season" => 1,
            "episode" => 2
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/3.mp4",
            "season" => 1,
            "episode" => 3
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/4.mp4",
            "season" => 1,
            "episode" => 4
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/5.mp4",
            "season" => 1,
            "episode" => 5
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/6.mp4",
            "season" => 1,
            "episode" => 6
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/7.mp4",
            "season" => 1,
            "episode" => 7
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/8.mp4",
            "season" => 1,
            "episode" => 8
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/9.mp4",
            "season" => 1,
            "episode" => 9
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/10.mp4",
            "season" => 1,
            "episode" => 10
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/11.mp4",
            "season" => 1,
            "episode" => 11
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/12.mp4",
            "season" => 1,
            "episode" => 12
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/13.mp4",
            "season" => 1,
            "episode" => 13
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/14.mp4",
            "season" => 1,
            "episode" => 14
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/15.mp4",
            "season" => 1,
            "episode" => 15
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/16.mp4",
            "season" => 1,
            "episode" => 16
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/17.mp4",
            "season" => 1,
            "episode" => 17
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/18.mp4",
            "season" => 1,
            "episode" => 18
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/19.mp4",
            "season" => 1,
            "episode" => 19
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/20.mp4",
            "season" => 1,
            "episode" => 20
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/21.mp4",
            "season" => 1,
            "episode" => 21
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/22.mp4",
            "season" => 1,
            "episode" => 22
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/23.mp4",
            "season" => 1,
            "episode" => 23
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/24.mp4",
            "season" => 1,
            "episode" => 24
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/25.mp4",
            "season" => 1,
            "episode" => 25
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s2/mp4/kimetsu-no-yaiba/fhd/26.mp4",
            "season" => 1,
            "episode" => 26
        ]);



        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-mugen-ressha-hen/hd/10.mp4",
            "season" => 2,
            "episode" => 1
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-mugen-ressha-hen/hd/2.mp4",
            "season" => 2,
            "episode" => 2
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4_temp/kimetsu-no-yaiba-mugen-ressha-hen/3/720p.mp4",
            "season" => 2,
            "episode" => 3
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "XXXXXXXXXXXXXXXXXXXXXXX",
            "is_undefined" => true,
            "season" => 2,
            "episode" => 4
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-mugen-ressha-hen/hd/5.mp4",
            "season" => 2,
            "episode" => 5
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-mugen-ressha-hen/hd/6.mp4",
            "season" => 2,
            "episode" => 6
        ]);

        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-mugen-ressha-hen/hd/7.mp4",
            "season" => 2,
            "episode" => 7
        ]);


        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/hd/1.mp4",
            "season" => 3,
            "episode" => 1
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/hd/2.mp4",
            "season" => 3,
            "episode" => 2
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4_temp/kimetsu-no-yaiba-yuukaku-hen/3/720p.mp4",
            "season" => 3,
            "episode" => 3
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/hd/4.mp4",
            "season" => 3,
            "episode" => 4
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/hd/5.mp4",
            "season" => 3,
            "episode" => 5
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "XXXXXXXXXXXXXXXXXXXXXXX",
            "is_undefined" => true,
            "season" => 3,
            "episode" => 6
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "XXXXXXXXXXXXXXXXXXXXXXX",
            "is_undefined" => true,
            "season" => 3,
            "episode" => 7
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/sd/8.mp4",
            "season" => 3,
            "episode" => 8
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/sd/9.mp4",
            "season" => 3,
            "episode" => 9
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s1/mp4/kimetsu-no-yaiba-yuukaku-hen/sd/10.mp4",
            "season" => 3,
            "episode" => 10
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "XXXXXXXXXXXXXXXXXXXXXXX",
            "is_undefined" => true,
            "season" => 3,
            "episode" => 11
        ]);



        // Demon Slayer - Mugen Ressha-hen - The Movie
        $media = Media::create([
            'genre_id' => 1,
            'title' => 'Demon Slayer - Mugen Ressha-hen - The Movie',
            'description' => 'Tanjirou Kamado e seus amigos do Demon Slayer Corps acompanham Kyoujurou Rengoku, o Flame Hashira, para investigar uma misteriosa série de desaparecimentos ocorrendo dentro de um trem. Mal sabem eles que Enmu, um dos Doze Kizuki, também está a bordo e preparou uma armadilha para eles.',
            'image_url' => 'https://i.ytimg.com/vi/H7JwbCvA6UU/maxresdefault.jpg',
            'trailer_url' => '',
            'type' => 'MOVIE',
            'seasons_count' => 1,
            'episodes_count' => 1,
        ]);
        DB::table('videos')->insert([
            'media_id' => $media->id, "base_media_url" => "https://lightspeedst.net/s4/mp4/kimetsu-no-yaiba-movie-mugen-ressha-hen/sd/1.mp4",
            "season" => 1,
            "episode" => 1
        ]);
    }
}
