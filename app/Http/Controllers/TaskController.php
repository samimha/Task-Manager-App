<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{
    
    public function __construct(){

        //$this->middleware('auth');
    }


    public function index(){

        $tasks = Task::all();

        return view('tasks', compact('tasks'));

    }

    public function show(Task $task){   // '$task'-name has to be equal to the wildcard name with a $-sign in front

        return view('showtask', compact('task'));

    }

    public function create(){

        if(Auth::check()){
            return view('createtask');
        }

        return redirect('/login')->withErrors(['You have to be logged in to create a task']);
        

    }

    public function store(){

        $this->validate(request(), [
            'description' => 'required'
        ]);

        $task = new Task;
        $task->description = request('description');
        $task->user_id = auth()->id();
        $task->save();

        return redirect('/tasks');

    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }

    public function update($id){
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();
        return redirect('/tasks');
    }

}
