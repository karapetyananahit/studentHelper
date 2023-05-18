<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            "question" => "
                <div>
                    <span class='variable'>if</span> ( 3 > 2 > 1 ) {
                </div>

                <div class='tab-1'>
                    <span class='main_color'>console</span>.<span class='main_color'>log</span>(<span class='variable'>true</span>)
                </div>

                <div>
                    } <span class='variable'>else</span> {
                </div>

                <div class='tab-1'>
                    <span class='main_color'>console</span>.<span class='main_color'>log</span>(<span class='variable'>false</span>)
                </div>

                <div>
                    }
                </div>
            ",
            "answer" => "false",
            "seconds" => 15,
        ]);

        DB::table('questions')->insert([
            "question" => "harc #12",
            "form" => "awd gauywgdauywgduawg kuawg ukawg kuaw wgauk|aw dakiu duakw dkuaw kuaw gw|auwk dgkuawd gkuawd|auwgdkuawgdukawgd",
            "answer" => "1",
            "seconds" => 300,
        ]);

        for($i=0;$i<20;$i++){
            DB::table('questions')->insert([
                "question" => "bla bla bla $i",
                "answer" => "bla$i",
                "seconds" => 15,
            ]);
        }
    }
}
