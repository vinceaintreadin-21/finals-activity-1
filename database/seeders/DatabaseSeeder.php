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
        Teacher::factory(10)->create()->each(function ($teacher) {
            // Generate a unique set of names for the 10 students
            $names = collect()->times(10, fn () => fake()->unique()->name);

            // Create students for the teacher
            $names->each(function ($name) use ($teacher) {
                Student::factory()->create([
                    'teacher_id' => $teacher->id,
                    'name' => $name, // Assign a unique name
                    'age' => fake()->numberBetween(18, 25), // Assign age
                ]);
            });

            // Reset unique constraints for Faker
            fake()->unique(true);
        });
    }
}
