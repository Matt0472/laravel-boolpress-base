@extends('user.layouts.layout')
@section('main-content')
    @foreach ($users as $user)
        <div class="card">
            <ul>
               <li class="text-primary">NOME UTENTE: <span class="text-dark">{{$user->name}}</span></li> 
            <li><a class="btn btn-warning" href="{{route('user.show', $user->id)}}">VISUALIZZA PROFILO COMPLETO</a></li> 
            </ul>
        </div>
    @endforeach
@endsection