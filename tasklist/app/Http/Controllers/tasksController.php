<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\task;    // 追加

class tasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    public function show($id)
    {
        $task::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }
    public function create()
    {
        $task = new task;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }
    public function store(Request $request)
    {
        $task = new Message;
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    public function edit($id)
    {
        $task = task::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }
    public function update(Request $request, $id)
    {
        $task = Message::find($id);
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    public function destroy($id)
    {
        $task = task::find($id);
        $task->delete();

        return redirect('/');
    }
}
