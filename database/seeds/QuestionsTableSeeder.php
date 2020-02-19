<?php

use App\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alphabet = range('A', 'Z');

        for ($i = 1; $i <= 3; $i++) {
            DB::table('questions')->insert([
                'content' => 'Question '.$i,
                'is_active' => $i==1?true:false,
                'door_name' => $alphabet[$i-1],
                'indice_next' => 'C\'est la porte : ' . $alphabet[$i],
            ]);
            Artisan::call('model:position', [
                'model'=> Question::class
            ]);
        }
    }
}
