@extends('layouts.layout')

@section('content')

    <h1>Create a task</h1>

    <form method="POST" action="/tasks">
        {{ csrf_field() }}

        <!--description-->
        <div class="form-group">
          <label for="tasktext">Description</label>
          <input type="textarea" class="form-control" id="description" name="description" placeholder="Text..." required>
        </div>

        <!--submit-->
        <div class="form-group">
            <button type="submit" class="btn btn-default">Create</button>
        </div>

        @include('layouts/errors')

    </form>

@endsection