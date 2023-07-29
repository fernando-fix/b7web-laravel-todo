<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function view(Request $request)
    {
        return view('tasks.view');
    }
    public function create(Request $request)
    {
        return view('tasks.create');
    }
    public function edit(Request $request)
    {
        return view('tasks.edit');
    }
    public function delete(Request $request)
    {
        // deleta uma task
        return redirect(route('home'));
    }
}
