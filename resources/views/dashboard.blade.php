@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
         <a href="/blogs/create" class="btn btn-info" role="button">Add New Post</a>

<br><br>

@if(count($posts)>0)



<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($posts as $i=>$post)
    


      <tr>
        <td>{{++$i}}</td>
        <td>{{$post->title}}</td>
        <td> <a href="/blogs/{{$post->id}}/edit " class="btn btn-primary" role="button">Edit</a>

            <form action="{{action('PostController@destroy', $post->id)}}" method="Post" class="float-right">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger"  onclick= 'return confirm("Do you to Delete this ?");'    >Delete</button>
      
            </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@else
<p> No Post Yet </p>
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
