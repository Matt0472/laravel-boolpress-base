@extends('chronicle_blog.layouts.layout')

  @section('main-content')
      <h1 class="text-center">Inserisci un nuovo aticolo nel blog</h1>
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
    <form action="{{route('chronicle.store')}}" method="post">
      @csrf
      @method('POST')
      <label for="title">Author</label>
      <input class="form-control" type="text" name="author" placeholder="Author">
      <label for="content">Author Job</label>
      <input class="form-control" type="text" name="author_job" placeholder="Author Job">
      <label for="content">Category</label>
      <input class="form-control" type="text" name="category" placeholder="Category">
      <label for="content">Title</label>
      <input class="form-control" type="text" name="title" placeholder="Title">
      <label for="content">Image Path</label>
      <input class="form-control" type="text" name="img" placeholder="Image Path">
      <label for="content">Article</label>
      <input class="form-control mb-5" type="text" name="article" placeholder="Article">

      <input class="btn btn-primary" type="submit" value="Invia">
    </form>
  @endsection