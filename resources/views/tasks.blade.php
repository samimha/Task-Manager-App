@extends ('layouts.layout')

@section('content')

    <h1>Task list</h1>
        <ul>
        
            @foreach ($tasks as $task)
            
                <!--a task-->
                <li class="list-group-item">
                    <a href="/tasks{{$task->id}}">
                        {{ $task->description }}
                    </a>
                     - 
                    @if($task->completed) 
                    
                        <!--done-->
                        <span class="text-success">Done</span> 
                    @else

                        <!--mark a task done-->
                        <form method="POST" action="/tasks/{{$task->id}}" style="display:inline;">
                            {{method_field('PATCH')}}
                            {{ csrf_field() }}
                            <button type="submit" class="badge btn btn-outline-success">Mark done</button>
                        </form>

                    @endif
                    <div>Created by: {{ $task->user->name }}</div>
                    
                </li>
                
            @endforeach
            
        </ul>

        <h2><a href="/createtask">Create a new task</a></h2>
        
@endsection