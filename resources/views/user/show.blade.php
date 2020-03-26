@extends('user.layouts.layout')
  @section('main-content')
<h2 class="text-center text-warning">Utente: {{$user->name}}</h2>
    <div class="card">
      <ul>
        @foreach ($user->photos as $photo)
              <li>{{ $photo->path }}</li>
          @endforeach
          
      </ul>
    </div>            
  @endsection