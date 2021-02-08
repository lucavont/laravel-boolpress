@extends('layouts.app')

@section('content')

@if (Auth::check())
    <h1>Ciao {{$user->name}}!</h1>
@else 
    <h1>Ciao Utente!</h1>
@endif
    
@endsection