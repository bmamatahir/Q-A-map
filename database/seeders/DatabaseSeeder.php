<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        User::factory(10)
            ->has(
                Question::factory()
                    ->count(random_int(0, 3))
            )
            ->create();


        Answer::factory()
            ->count(10)
            ->state(new Sequence(fn($sequence) => ['user_id' => User::All()->random()->id, 'question_id' => Question::All()->random()->id]))
            ->create();
    }
}
