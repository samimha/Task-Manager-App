@extends('layouts.layout')

@section('content')

<hr>
<br>

<h1>{{ $task->description }}</h1>

<!--status of the task-->
@if( $task->completed )
  <h3>Status: <span class="text-succes">Done</span></h3>
@else
  <h3>Status: <span class="text-secondary">In progress</span></h3>
@endif

<br>

<!--delete button-->
<form method="POST" action="/tasks/{{$task->id}}/delete" style="display:inline;">
  {{method_field('DELETE')}}
  {{ csrf_field() }}
  <button type="submit" class="btn btn-danger">Delete</button>
</form>

@if(!$task->completed )
  <!--done button-->
  <form method="POST" action="/tasks/{{$task->id}}" style="display:inline;">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
    <button type="submit" class=" btn btn-success">Mark as done</button>
  </form>
@endif

<br>
<br>
<hr>

@endsection
