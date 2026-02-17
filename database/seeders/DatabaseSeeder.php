<?php

namespace Database\Seeders;

use App\Models\ClassModal;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            School::factory(1)->has(
                ClassModal::factory(3)->has(Student::factory(5), 'students'),
                'classes',
            )->create();
    }
}
