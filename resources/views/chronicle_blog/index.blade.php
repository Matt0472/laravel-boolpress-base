@extends('chronicle_blog.layouts.layout')
  
    @section('main-content')
      <div class="wrapper">
        <h1 class="text-center">Chronicle Blog</h1>
      </div>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Author</th>
            <th scope="col">Author Job</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Article</th>
            <th scope="col">Updated At</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($chronicle_blog as $item)
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->author}}</td>
            <td>{{$item->author_job}}</td>
              <td>{{$item->category}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->img}}</td>
              <td>{{$item->article}}</td>
              <td>{{$item->created_at}}</td>
              <td>
                <form action="" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endsection
  
    