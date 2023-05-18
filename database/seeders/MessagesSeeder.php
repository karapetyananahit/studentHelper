<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            "name" => "Abo",
            "surname" => "Aboyan",
            "phone" => "093 86 10 52",
            "email" => "awdaw@awdawd.awdaw",
            "subject" => "Es shat ban em uzum",
        ]);
        DB::table('messages')->insert([
            "user_id" => 2,
            "name" => "Abo",
            "surname" => "Aboyan",
            "phone" => "093 86 10 52",
            "email" => "awdaw@awdawd.awdaw",
            "subject" => "Es shat ban em uzum",
        ]);
    }
}
