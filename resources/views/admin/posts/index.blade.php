@extends('layouts.admin')

@section('content')
    <h1>Tutti i post</h1>

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
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection