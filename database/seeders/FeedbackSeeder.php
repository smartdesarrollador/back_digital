<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('feedback')->insert([
            'reaction' => "true",
            'message' => "Lorem ipsum dolor sit amet consectetur adipisicing elit",
            'date' => "2023-05-01",
            'time' => null,
            'inscripciones_id' => 1, 
        ]);
    }
}
