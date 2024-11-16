<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = Teacher::all();

        foreach ($teachers as $teacher){
            Student::factory()->count(10)->create(['teacher_id' => $teacher->id]);
        }

    }
}
