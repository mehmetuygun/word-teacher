<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Word;
use App\Models\WordList;
use Illuminate\Database\Seeder;

class WordListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wordList = WordList::factory()->create([
            'name' => 'The Oxford 5000™ by CEFR level',
            'user_id' => User::first()->id
        ]);

        foreach ($this->getSampleWords() as $word) {
            Word::factory()->create(['name' => $word]);
        }
    }

    private function getSampleWords()
    {
        return [
            'absorb',
            'abstract',
            'accent',
            'accidentally',
            'accommodate',
            'accomplish',
            'accountant',
            'accuracy'
        ];
    }
}
