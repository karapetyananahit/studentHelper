<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            "user_id" => 1,
            "type" => "danger",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Iste blanditiis, minima veritatis delectus aliquam, tempora.",
            "date" => "Ապրիլի 20, 1995",
        ]);

        DB::table('news')->insert([
            "user_id" => 1,
            "type" => "warning",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Iste blanditiis, minima veritatis delectus aliquam, tempora.",
            "date" => "Ապրիլի 20, 1995",
        ]);

        DB::table('news')->insert([
            "user_id" => 1,
            "type" => "success",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Iste blanditiis, minima veritatis delectus aliquam, tempora.",
            "date" => "Ապրիլի 20, 1995",
        ]);

        DB::table('news')->insert([
            "user_id" => 1,
            "type" => "primary",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Iste blanditiis, minima veritatis delectus aliquam, tempora.",
            "date" => "Ապրիլի 20, 1995",
        ]);
    }
}
