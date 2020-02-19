<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('choices')->insert([
                'content' => 'choice '.$i,
                'is_right_choice' => $i==1?true:false,
                'question_id' => 1
            ]);
            DB::table('choices')->insert([
                'content' => 'choice '.$i,
                'is_right_choice' => $i==1?true:false,
                'question_id' => 2
            ]);
            DB::table('choices')->insert([
                'content' => 'choice '.$i,
                'is_right_choice' => $i==1?true:false,
                'question_id' => 3
            ]);
        }
    }
}
