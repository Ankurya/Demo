@extends('common.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <script src="{{asset('js/app.js')}}"></script>
</head>
<body>

<br>
<div class="container">
  <h2 >Please enter the following details to login</h2>
  <form action="" method="post">

    <div class="form-group">
      <label for="email" >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">

    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    
<br>

    <a class="btn btn-warning" href="/blogs/create/registration" role="button">Sign up</a>
    <button type="login" name="login" value="login" class="btn btn-primary"   >Login </button>
  </form>
<br>
</body>
</html>
@endsection