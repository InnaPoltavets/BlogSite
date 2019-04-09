@extends('layout')
@section('content')

<h1>{{$category->name}}</h1>

<div class="blog-post">
    @foreach($categorizedPosts as $categorizedPost)
    
        <h2 class="blog-post-title">{{$categorizedPost->title}}</h2>
        <p>{{$categorizedPost->categories->name}}</p>
        <p class="blog-post-meta">{{$categorizedPost->created_at}} by {{$categorizedPost->users->name}} </p>

        <p>{{$categorizedPost->content}}</p>
        

@endforeach
@endsection