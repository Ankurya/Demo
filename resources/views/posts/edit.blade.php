@extends('common.master')

@section('content')


<div class="container">

    <div class="form-group">
    <form action="{{action('PostController@update', $post->id)}}" method="Post">
        @method('PUT')
        @csrf
    <label for="usr">Title</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}">
      <br>
      <label for="text">Write your content here...</label>
    <textarea class="form-control" rows="14" name="content" id="article-ckeditor"   >{{$post->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

  </form>

</div>




</div>


@endsection


