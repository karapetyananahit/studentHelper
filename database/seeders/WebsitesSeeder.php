<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websites')->insert([
            "name" => "W3School",
            "url" => "https://w3schools.com",
            "languages" => "HTML@css,
CSS@css,
Bootstrap@css,
W3.css@css,
Sass@css,
JavaScript@front,
jQuery@front,
React JS@front,
Angular JS@front,
JSON@front,
AJAX@front,
W3.js@front,
PHP@back,
Node JS@back,
SQL@back,
MySQL@back,
Git@other",
        ]);
    }
}
