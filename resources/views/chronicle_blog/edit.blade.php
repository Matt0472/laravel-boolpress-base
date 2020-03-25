@extends('chronicle_blog.layouts.layout')

  @section('main-content')
      <h1 class="text-center">Modifica un nuovo aticolo già presente nel blog</h1>
  @if ($errors->any()) 
    <div class="alert alert-danger"> 
      <ul> 
        @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach
      </ul>
    </div> 
  @endif
  <div class="form-group container">
    <form action="{{route('chronicle.update', $chronicle->id)}}" method="post">
      @csrf
      @method('PATCH')
      <label for="title">Author</label>
      <input class="form-control" type="text" name="author" value="{{$chronicle->author}}"  placeholder="Author">
      <label for="content">Author Job</label>
      <input class="form-control" type="text" name="author_job" value="{{$chronicle->author_job}}" placeholder="Author Job">
      <label for="content">Category</label>
      <input class="form-control" type="text" name="category" value="{{$chronicle->category}}" placeholder="Category">
      <label for="content">Title</label>
      <input class="form-control" type="text" name="title" value="{{$chronicle->title}}" placeholder="Title">
      <label for="content">Image Path</label>
      <input class="form-control" type="text" name="img" value="{{$chronicle->img}}" placeholder="Image Path">
      <label for="content">Article</label>
      <input class="form-control mb-5" type="text" name="article" value="{{$chronicle->article}}" placeholder="Article">

      <input class="btn btn-primary" type="submit" value="Invia">
    </form>
  @endsection