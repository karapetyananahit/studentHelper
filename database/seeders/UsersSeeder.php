<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            "name" => "Anahit",
            "surname" => "Karapetyan",
            "img" => "12",
            "email" => "anahitkarapetyan075@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => 1,
            "questions_times" => 20,
            "questions_times_today" => 5,
            "questions_corrects" => 18,
            "tasks_times" => 4,
            "tasks_corrects" => 15,
        ]);

        DB::table('users')->insert([
            "name" => "Test2",
            "surname" => "testyan2",
            "img" => "6",
            "email" => "test2.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 10,
            "questions_times_today" => 5,
            "questions_corrects" => 6,
            "tasks_times" => 10,
            "tasks_corrects" => 38,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test3",
            "surname" => "testyan3",
            "img" => "8",
            "email" => "test3.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 5,
            "questions_times_today" => 5,
            "questions_corrects" => 1,
            "tasks_times" => 1,
            "tasks_corrects" => 3,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test4",
            "surname" => "testyan4",
            "img" => "21",
            "email" => "test4.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 20,
            "questions_times_today" => 5,
            "questions_corrects" => 12,
            "tasks_times" => 2,
            "tasks_corrects" => 8,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test5",
            "surname" => "testyan5",
            "img" => "12",
            "email" => "test5.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 17,
            "questions_times_today" => 5,
            "questions_corrects" => 14,
            "tasks_times" => 3,
            "tasks_corrects" => 2,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test6",
            "surname" => "testyan6",
            "img" => "18",
            "email" => "test6.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 20,
            "questions_times_today" => 5,
            "questions_corrects" => 18,
            "tasks_times" => 1,
            "tasks_corrects" => 4,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test7",
            "surname" => "testyan7",
            "img" => "16",
            "email" => "test7.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 15,
            "questions_times_today" => 6,
            "questions_corrects" => 12,
            "tasks_times" => 2,
            "tasks_corrects" => 9,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test8",
            "surname" => "testyan8",
            "img" => "15",
            "email" => "test8.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 20,
            "questions_times_today" => 8,
            "questions_corrects" => 18,
            "tasks_times" => 1,
            "tasks_corrects" => 4,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test9",
            "surname" => "testyan9",
            "img" => "29",
            "email" => "test9.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 12,
            "questions_times_today" => 1,
            "questions_corrects" => 12,
            "tasks_times" => 1,
            "tasks_corrects" => 5,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test10",
            "surname" => "testyan10",
            "img" => "30",
            "email" => "test10.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 34,
            "questions_times_today" => 4,
            "questions_corrects" => 27,
            "tasks_times" => 5,
            "tasks_corrects" => 18,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

        DB::table('users')->insert([
            "name" => "Test11",
            "surname" => "testyan11",
            "img" => "31",
            "email" => "test11.test@gmail.com",
            "password" => Hash::make("awdawdawd"),
            "is_admin" => "0",
            "questions_times" => 30,
            "questions_times_today" => 1,
            "questions_corrects" => 21,
            "tasks_times" => 4,
            "tasks_corrects" => 12,
            "created_at" => "2021-04-17 07:26:58",
            "updated_at" => "2021-04-17 07:26:58",
        ]);

    }
}
