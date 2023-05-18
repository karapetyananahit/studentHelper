<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            "subject" => "e sycu eskuc esukc sekuc k  ces cgeusc g <span class='text-primary'>tetetet</span>",
        ]);
    }
}
