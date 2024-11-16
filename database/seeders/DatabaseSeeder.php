<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Teacher::factory(10)->create()->each(function ($teacher){
            Student::factory(10)->create([
                'teacher_id' => $teacher->id,
                'name' => fake()->name(),
                'age' => fake()->randomElement([1, 23])
            ]);
        });
    }
}
