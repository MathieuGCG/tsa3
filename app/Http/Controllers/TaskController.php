<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.today', [
            'title' => 'Tasks for Today',
            'tasks' => Task::today()->get(),
        ]);
    }

    public function allTasks()
    {
        return view('tasks.all', [
            'title' => 'Complete Task List',
            'tasks' => Task::orderedByDate()->get(),
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'title' => 'User Profile',
            'user'  => User::first(),
        ]);
    }

    public function about()
    {
        return view('about', [
            'title'     => 'About Developer',
            'developer' => [
                'name'    => 'Student Name / Group',
                'section' => 'Section Code',
                'course'  => 'IT0049 - Web System Technologies',
            ],
        ]);
    }
}