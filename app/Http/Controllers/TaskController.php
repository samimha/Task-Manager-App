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

        //list all tasks
        $tasks = Task::all();

        return view('tasks', compact('tasks'));

    }

    public function show(Task $task){   // '$task'-name has to be equal to the wildcard name with a $-sign in front

        //show one task
        return view('showtask', compact('task'));

    }

    public function create(){

        //create a new task
        //must be logged in
        if(Auth::check()){
            return view('createtask');
        }

        return redirect('/login')->withErrors(['You have to be logged in to create a task']);
    }

    public function store(){

        //save a new task
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

        //remove a task from database
        $task = Task::find($id);
        $task->delete();
        
        return redirect('/tasks');
    }

    public function update($id){

        //complete a task
        $task = Task::find($id);
        $task->completed = 1;
        $task->save();
        
        return redirect('/tasks');
    }

}
