<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            "name" => "New Perspectives HTML5 and CSS3: Comprehensive (2017)",
            "author" => "AAAA",
            "pages" => "400",
            "img" => "HTML5_and_CSS3",
            "to_show" => 1,
            "download" => 250
        ]);

        DB::table('books')->insert([
            "name" => "Fullstack React with TypeScript (2020)",
            "author" => "bbbbb",
            "pages" => "400",
            "img" => "React_with_TypeScript",
            "to_show" => 1,
            "download" => 250
        ]);

        DB::table('books')->insert([
            "name" => "Fullstack React with TypeScript (2020)",
            "author" => "bbbbb",
            "pages" => "400",
            "img" => "Dancing_with_Qubits",
            "to_show" => 0,
            "download" => 250
        ]);
    }
}
