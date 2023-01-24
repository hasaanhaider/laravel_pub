<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {

    public function store(Request $request) {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $store = Task::create($validate);
        return back()->with('success', 'Task is Added');

        // return 
    }

    public function destroy($id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return back()->with('delete', 'Task Deleted');
    }
}
