@extends('layout')
@section('content')

<div class="blog-post">
        <h2 class="blog-post-title">{{$post->title}}</h2>
        <p>{{$post->categories->name}}</p>
        <p class="blog-post-meta">{{$post->created_at}}
            <a href="{{route('authors_posts', $post->users->id)}}">by {{$post->users->name}} </a></p>

        <p>{{$post->content}}</p>









<form action="{{route('save_comment')}}" method="post">
    {{ csrf_field() }}




    <div class="form-group">
        <textarea id="exampleCheck1" name="content"></textarea>
        <label class="form-check-label" for="exampleCheck1"></label>
    </div>
    <input type="hidden" name="post_id" value="{{$post->id}}"/>
    <button type="submit" class="btn btn-primary">Send comment</button>
</form>

@endsection

