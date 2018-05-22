@extends('layouts.layout')

@section ('content')

    <h1>Hello <?= $name; ?></h1>
    <p>
        This is an app that I created for myself to test out the PHP framework Laravel. The app is mostly based on a 
        tutorial series on Laracast named: <a href="https://laracasts.com/series/laravel-from-scratch-2017">Laravel From Scratch</a>.
    </p>
    <p>
        The main app is on the <a href="/tasks">tasks</a> tab so you might want to head there.
    </p>

@endsection