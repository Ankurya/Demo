@extends('common.master')

@section('content')


<div class="container">

    @foreach($posts as $post)

    <div class="shadow-lg p-4 mb-4 bg-white">
      <a href="/blogs/{{$post->id}}"> <h1> {{$post->title}}</h1> </a>
      <hr>
      <small> Created at {{$post->created_at}}  </small>
    </div>


@endforeach

{{$posts->links()}}



</div>


@endsection


