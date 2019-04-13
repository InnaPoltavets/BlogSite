@extends('layout')
@section('content')
<form action="{{route('save_page')}}" method="post">
  {{ csrf_field() }}
    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
  </div>
  
  <div class="form-group">
      <label for="categories">Categories</label>
      <select name="categories_id">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
      </select>
      
  </div>
  
  <div class="form-group">
      <textarea id="exampleCheck1" name="content"></textarea>
      <label class="form-check-label" for="exampleCheck1"></label>
  </div>
    
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection