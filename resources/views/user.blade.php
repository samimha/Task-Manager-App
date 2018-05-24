@extends('layouts.layout')

@section('content')

    <h1>{{$user->name}}</h1>
    <a href="/logout">Log out</a>

@endsection