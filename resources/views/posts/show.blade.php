@extends('layouts.app')

@section('content')


<div class="container">

   

    <div class="shadow-lg p-4 mb-4 bg-white">
     <h1> {{$post->title}}</h1>
     <p> {!! $post->body !!}</p> 
      <hr>
      <small> Created at {{$post->created_at}} </small>
      <br><br>
      <a href="/blogs/{{$post->id}}/edit " class="btn btn-primary" role="button">Edit</a>

      <form action="{{action('PostController@destroy', $post->id)}}" method="Post" class="float-right">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger"  onclick= 'return confirm("Do you to Delete this ?");'    >Delete</button>

      </form>



</div>





</div>


@endsection


