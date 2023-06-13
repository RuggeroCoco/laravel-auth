@extends('layouts.admin')



@section('content')

@include('partials.session_message')

    <h1>Tutti i post</h1>
    <div class="text-end">
      <a href="{{route('admin.posts.create')}}" class="btn btn-success">Nuovo post</a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">title</th>
      <th scope="col">Slug</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->slug}}</td>
      <td>
        <a href="{{route('admin.posts.show', $post->slug)}}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
        <a href="{{route('admin.posts.edit', $post->slug)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <form class="d-inline-block" action="{{route('admin.posts.destroy', $post->slug)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">
              <i class="fa-solid fa-trash"></i>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection