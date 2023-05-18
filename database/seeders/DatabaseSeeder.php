<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BlogsSeeder::class,
            BooksSeeder::class,
            DiscussionsMessagesSeeder::class,
            DiscussionsSeeder::class,
            FaqsSeeder::class,
            MessagesSeeder::class,
            NewsSeeder::class,
            QuestionsSeeder::class,
            TasksSeeder::class,
            UsersSeeder::class,
            WebsitesSeeder::class,
            YoutubeSeeder::class,
        ]);
    }
}
