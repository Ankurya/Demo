
@extends('common.master')

@section('content')


<h1> {{$Title}} </h1>

<ul>
    @foreach($Services as $service)

    <li> {{$service}} </li>

    @endforeach


</ul>

@endsection