<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            "question" => "Bla bla bla ?",
            "answer" => "a udhawu hukf <span class='text-danger'> a udhawu hukf heus fhesu fhesiu</span> heslu fhesu fehsu fhesiu fheslif hlif hlif h",
        ]);
        DB::table('faqs')->insert([
            "question" => "Bla bla bla ?",
            "answer" => " <span class='text-primary'> a udhawu hukf heus fhesu fhesiu</span> fl fhawuh eku fheuf heslu fhesu fehsu fhesiu fheslif hlif hlif h",
        ]);
        DB::table('faqs')->insert([
            "question" => "Bla bla bla ?",
            "answer" => "<b>a udhawu</b> hukf heus fhesu fhesiu <span class='text-primary'> a udhawu hukf heus fhesu fhesiu</span> fhesu fehsu fhesiu fheslif hlif hlif h",
        ]);
    }
}
