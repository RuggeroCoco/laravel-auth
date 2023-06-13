@extends('layouts.admin')

@section('content')
    <h2>Modifica il post {{$post->title}}</h2>

    @include('partials.errors')
  

    <form action="{{route('admin.posts.update', $post->slug)}}" method="POST">
        @csrf
        @method('PUT')
       <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{old('content')}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
@endsection