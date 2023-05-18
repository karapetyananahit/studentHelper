<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscussionsMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discussions_messages')->insert([
            "user_id" => 2,
            "discussion_id" => 1,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
        DB::table('discussions_messages')->insert([
            "user_id" => 3,
            "discussion_id" => 1,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
        DB::table('discussions_messages')->insert([
            "user_id" => 1,
            "discussion_id" => 1,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
        DB::table('discussions_messages')->insert([
            "user_id" => 3,
            "discussion_id" => 1,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
        DB::table('discussions_messages')->insert([
            "user_id" => 3,
            "discussion_id" => 2,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
        DB::table('discussions_messages')->insert([
            "user_id" => 2,
            "discussion_id" => 3,
            "message" => "Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք, Բա գիդեիք որ սենց բանը և այլն բաաաա չիամցաք",
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);
    }
}
