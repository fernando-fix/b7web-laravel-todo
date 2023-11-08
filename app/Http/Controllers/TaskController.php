<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
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
        $categories = Category::all();
        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function create_action(Request $request)
    {
        $task = $request->only(['title', 'category_id', 'description', 'due_date']);
        $task['user_id'] = 1;
        $dbtask = Task::create($task);
        return $dbtask;
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        $task = Task::find($id);
        if (!$task) {
            return redirect(route('home'));
        }

        $categories = Category::all();

        $data['task'] = $task;
        $data['categories'] = $categories;

        return view('tasks.edit', $data);
    }

    public function edit_action(Request $request)
    {
        $request_data = $request->only(['title', 'description', 'due_date', 'category_id']);

        $task = Task::find($request->id);
        if (!$task) {
            return "Erro: task não existe";
        }

        // se não tiver is_done (pq o miserávi não manda se não tiver checked), então é 0;
        $request_data['is_done'] = $request->is_done ?? '0';

        $task->update($request_data);
        $task->save();

        return redirect(route('home'));
    }

    public function delete(Request $request)
    {
        // deleta uma task
        $task = Task::find($request->id);
        if ($task) {
            $task->delete();
        }

        return redirect(route('home'));
        dd($request->all());
    }
}
