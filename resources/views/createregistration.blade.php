@extends('layouts.layout')

@section('content')

    <h1>Register</h1>

    <form method="POST" action="/register">
        {{ csrf_field() }}

        <!--name-->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Text..." required>
        </div>

        <!--email-->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Text..." required>
        </div>

        <!--password-->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Text..." required>
        </div>

        <!--confirm password-->
        <div class="form-group">
            <label for="password_confirmation">Password confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Text..." required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>

        @include('layouts.errors')

    </form>


@endsection