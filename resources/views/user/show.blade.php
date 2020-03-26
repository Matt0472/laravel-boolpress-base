@extends('user.layouts.layout')
  @section('main-content')
    <h2 class="text-center text-warning">Utente: {{$user->name}}</h2>
        <div class="card">
          <ul>
            @foreach ($user->photos as $photo)
              <li class="text-primary">TITOLO FOTO: <span class="text-dark">{{ $photo->title }}</span></li>
            @endforeach
          </ul>
        </div>            
  @endsection