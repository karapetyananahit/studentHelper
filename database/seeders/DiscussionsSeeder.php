<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscussionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discussions')->insert([
            "user_id" => 1,
            "title" => "Քննարկում ենք եսինչ բանը",
        ]);
        DB::table('discussions')->insert([
            "user_id" => 2,
            "title" => "Քննարկում ենք եսինչ բանը",
        ]);
        DB::table('discussions')->insert([
            "user_id" => 3,
            "title" => "Քննարկում ենք եսինչ բանը",
        ]);
    }
}
