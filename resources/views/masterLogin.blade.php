@extends('layouts.layout')

@section('head')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css') }}">-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/custom.css') }}"
    <!-- Website CSS style -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <title>Master | Login</title>

@endsection

@section('content')
	
<div class="wrapper">
    <form class="form-signin" method="post" action="{{ URL::to('login') }}">   
    {{ csrf_field() }}    
      <h2 class="form-signin-heading text-center">Master Login</h2><br>
      <input type="text" class="form-control" name="emailId" placeholder="Email Address" required="" autofocus="" /><br>
      <label style="color:red">{{ $errors->first('emailId') }}</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>
      <label>{{ $errors->first('password') }}</label>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>