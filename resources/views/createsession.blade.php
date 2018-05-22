@extends('layouts.layout')

@section('content')
    <h1>Sign in</h1>

    <form method="POST" action="/login">
        {{ csrf_field() }}

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

        <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>

        @include('layouts.errors')
    </form>
    <hr>
    <br>
    <h2>New user?</h2>
    <a href="/register">Register now!</a>
@endsection