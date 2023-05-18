<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubes')->insert([
            "name" => "Rouben Meschian",
            "position" => "Front End",
            "url" => "https://www.youtube.com/@meschian",
            "languages" => "Հայ",
            "date" => "15 Հուն 2019",
            "types" => "
            HTML@css,
            CSS@css,
            JavaScript@front,
            jQuery@front,
            Node JS@back,
            Ajax@front"
            ,
            "playlists" => 12,
            "img" => "img/youtube/ruben.jpg",
            "followers" => 44000
        ]);

        DB::table('youtubes')->insert([
            "name" => "Web Development",
            "position" => "Full Stack Javascript",
            "url" => "https://www.youtube.com/@hayrapetyansami",
            "languages" => "Հայ",
            "date" => "20 Նոյ 2015",
            "types" => "
                HTML@css,
                CSS@css,
                CSS Flex Box@css,
                JavaScript@front,
                ES6@front,
                TypeScript@front,
                GitHub@other"
            ,
            "playlists" => 11,
            "img" => "img/youtube/sami_hayrapetyan.jpg",
            "followers" => 14800
        ]);



        DB::table('youtubes')->insert([
            "name" => "Codevolution",
            "position" => "Full Stack Javascript",
            "url" => "https://www.youtube.com/c/Codevolution/playlists",
            "languages" => "Անգ",
            "date" => "20 Նոյ 2015",
            "types" => "
                HTML@css,
                CSS@css,
                CSS Flex Box@css,
                ES6@front,
                TypeScript@front,
                React JS@front,
                Redux@front,
                Vue JS@front,
                Angular@front,
                Svelte JS@front,
                Mongo DB@back,
                Node JS@back,
                Next.js@back,
                Npm@other,
                VS Code@other,
                Chrome Extension@other"
            ,
            "playlists" => 34,
            "img" => "img/youtube/codevolution.jpg",
            "followers" => 296000
        ]);

        DB::table('youtubes')->insert([
            "name" => "Online Tutorials",
            "position" => "Front End",
            "url" => "https://www.youtube.com/c/OnlineTutorials4Designers/playlists",
            "languages" => "Անգ",
            "date" => "15 Հուն 2013",
            "types" => "
            HTML@css,
            CSS@css,
            JavaScript@front,
            jQuery@front"
            ,
            "playlists" => 133,
            "img" => "img/youtube/online-tutorials.jpg",
            "followers" => 524000
        ]);

        DB::table('youtubes')->insert([
            "name" => "Dani Krossing",
            "position" => "Full Stack",
            "url" => "https://www.youtube.com/c/OnlineTutorials4Designers/playlists",
            "languages" => "Անգ",
            "date" => "8 Օգս 2013",
            "types" => "
            HTML@css,
            CSS@css,
            Bootstrap@css,
            JavaScript@front,
            jQuery@front,
            Ajax@front,
            PHP@back,
            PHP OOP@back"
            ,
            "playlists" => 12,
            "img" => "img/youtube/dani-krossing.jpg",
            "followers" => 343000
        ]);

        DB::table('youtubes')->insert([
            "name" => "Владилен Минин",
            "position" => "Full Stack",
            "url" => "https://www.youtube.com/c/VladilenMinin/playlists",
            "languages" => "Ռուս",
            "date" => "18 Փետ 2019",
            "types" => "
                JavaScript@front,
                TypeScript@front,
                React Hooks@front,
                Redux@front,
                Next JS@front,
                Vue JS@front,
                Svelte JS@front,
                Express JS@back,
                Node JS@back,
                VS Code@other"
            ,
            "playlists" => 17,
            "img" => "img/youtube/vladilen-minin.jpg",
            "followers" => 170000
        ]);
    }
}
