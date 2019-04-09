@extends('layout')
@section('content')

    <div class="blog-post">
        @foreach($postsByAuthor as $postByAuthor)
        <h2 class="blog-post-title">{{$postByAuthor->title}}</h2>
        <p>{{$postByAuthor->users->name}}</p>
        <p class="blog-post-meta">{{$postByAuthor->created_at}} by {{$postByAuthor->users->name}}</p>

        <p>{{$postByAuthor->content}}</p>
        @endforeach



@endsection
