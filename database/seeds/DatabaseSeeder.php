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
         $this->call([
             CatagorySeeder::class,
             CourseSeeder::class,
             QuestionSeeder::class,
             TeacherSeeder::class,
             ThematicSeeder::class,
         ]);
    }
}
