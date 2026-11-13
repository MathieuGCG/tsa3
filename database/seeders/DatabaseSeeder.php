<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username'  => 'math_demo',
            'full_name' => 'Mathieu Gundran',
            'email'     => 'mathieu.gundran@example.com',
        ]);

        $today = Carbon::today();

        $tasks = [
            [
                'title'     => 'Submit IT0049 Summative Assessment 3',
                'status'    => 'pending',
                'task_date' => $today->toDateString(),
            ],
            [
                'title'     => 'Review Laravel Eloquent Query Scopes documentation',
                'status'    => 'completed',
                'task_date' => $today->toDateString(),
            ],
            [
                'title'     => 'Attend Web Systems Technologies lecture',
                'status'    => 'completed',
                'task_date' => $today->toDateString(),
            ],
            [
                'title'     => 'Design Laravel database migrations',
                'status'    => 'completed',
                'task_date' => $today->copy()->subDays(2)->toDateString(),
            ],
            [
                'title'     => 'Configure Laravel .env database connection',
                'status'    => 'completed',
                'task_date' => $today->copy()->subDays(2)->toDateString(),
            ],
            [
                'title'     => 'Install Laravel via Composer',
                'status'    => 'completed',
                'task_date' => $today->copy()->subDay()->toDateString(),
            ],
            [
                'title'     => 'Prepare for upcoming laboratory exam',
                'status'    => 'pending',
                'task_date' => $today->copy()->addDays(2)->toDateString(),
            ],
            [
                'title'     => 'Refactor Blade layouts and views',
                'status'    => 'pending',
                'task_date' => $today->copy()->addDays(3)->toDateString(),
            ],
            [
                'title'     => 'Deploy Laravel application to cloud hosting',
                'status'    => 'pending',
                'task_date' => $today->copy()->addDays(4)->toDateString(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}