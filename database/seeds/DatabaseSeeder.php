<?php

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
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(WordSeeder::class);
        $this->call(UserWordSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(UserCourseSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
