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
    public function run() { $this->call([ UserSeeder::class, ProfileSeeder::class, CourseSeeder::class, UserCourseSeeder::class, ]); }
}
