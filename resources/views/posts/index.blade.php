@extends('layout')
@section('content')

@foreach($priorPosts as $priorPost)
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      
          <h1 class="display-4 font-italic">{{$priorPost->title}}</h1>
     
      <p class="lead my-3">{{$priorPost->content}}</p>
      <p class="lead mb-0"><a href="{{route('show_post', $priorPost->id)}}" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
@endforeach





@foreach($posts as $post)
      <div class="blog-post">
        <a href="{{route('show_post', $post->id)}}"><h2>{{$post->title}}</h2></a>
          <p class="blog-post-meta">{{$post->categories->name}}</p>
          <p class="blog-post-meta">{{$post->created_at}} by <a href="{{route('authors_posts', $post->users->id)}}">{{$post->users->name}}</a></p>

        <p>{{$post->content}}</p>
        <a href="{{route('show_post', $post->id)}}" class="stretched-link">Continue reading</a>
      </div>
@endforeach



  </div><!-- /.row -->

</main><!-- /.container -->

@endsection