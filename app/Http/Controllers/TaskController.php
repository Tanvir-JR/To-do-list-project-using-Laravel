<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
class TaskController extends Controller
{
    //
    public function store(Request $request)
    {
        $task = $request->task;
        Task::create([
           'user_id' => Auth::user()->id,
           'task' => $task,
           'status' => 0
        ]);
        return to_route('home');
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return to_route('home');
    }
}