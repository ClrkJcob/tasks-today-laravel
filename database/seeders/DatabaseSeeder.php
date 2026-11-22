<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Clear existing records to prevent duplicates.
        Task::query()->delete();
        User::query()->delete();

        // Create exactly one user.
        User::create([
            'username' => 'clark',
            'full_name' => 'Clark Jacob P. Llamoso',
            'email' => 'clarkllamoso@yahoo.com',
        ]);

        // Prepare three different dates.
        $today = now()->startOfDay();

        $yesterday = $today->copy()->subDay()->toDateString();
        $todayDate = $today->toDateString();
        $tomorrow = $today->copy()->addDay()->toDateString();

        // Create eight sample tasks across three dates.
        $tasks = [
            [
                'title' => 'Install Laravel dependencies',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Configure the database',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Review project requirements',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Create Task and User models',
                'status' => 'completed',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Prepare the database seeder',
                'status' => 'pending',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Build the Welcome page',
                'status' => 'pending',
                'task_date' => $todayDate,
            ],
            [
                'title' => 'Build the Task List page',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Test date-based task filtering',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
