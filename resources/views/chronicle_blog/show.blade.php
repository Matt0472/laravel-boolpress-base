@extends('chronicle_blog.layouts.layout')
  @section('main-content')
  <h2 class="text-center text-warning">Nuovo articolo Inserito:</h2>
    <div class="card">
      <ul>
        <li class="text-primary">ID: <span class="text-dark">{{$chronicle->id}}</span></li>
        <li class="text-primary">Author: <span class="text-dark">{{$chronicle->author}}</span></li>
        <li class="text-primary">Author Job: <span class="text-dark">{{$chronicle->author_job}}</span></li>
        <li class="text-primary">Category: <span class="text-dark">{{$chronicle->category}}</span></li>
        <li class="text-primary">Title: <span class="text-dark">{{$chronicle->title}}</span></li>
        <li class="text-primary">Image: <span class="text-dark">{{$chronicle->img}}</span></li>     
        <li class="text-primary">Article: <span class="text-dark">{{$chronicle->article}}</span></li>     
      </ul>
    </div>            
  @endsection