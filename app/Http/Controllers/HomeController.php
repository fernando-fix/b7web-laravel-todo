<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $r)
    {
        $tasks = Task::all()->take(5);
        $data['tasks'] = $tasks;

        return view('home', $data);
    }
}
