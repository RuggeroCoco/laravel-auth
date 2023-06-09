@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{$post->title}}</h1>
    <div class="text-end">
        {{$post->slug}}
    </div>
    <p class="mt-4">{{$post->content}}</p>
@endsection