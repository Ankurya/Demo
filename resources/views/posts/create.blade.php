@extends('common.master')

@section('content')


<div class="container">

    <div class="form-group">
    <form action="{{action('PostController@store')}}" method="Post">
        @csrf
    <label for="usr">Title</label>
      <input type="text" class="form-control" name="title">
      <br>
      <label for="text">Write your content here...</label>
      <textarea class="form-control" rows="14" name="content" id="article-ckeditor"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>




</div>


@endsection


