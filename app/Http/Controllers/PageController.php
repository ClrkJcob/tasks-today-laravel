<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class PageController extends Controller
{
    /**
     * Display today's tasks.
     */
    public function home()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('pages.home', compact('tasks'));
    }

    /**
     * Display the user profile.
     */
    public function profile()
    {
        $user = User::first();

        return view('pages.profile', compact('user'));
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }
}
