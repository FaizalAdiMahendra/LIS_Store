@extends('layouts.master')


@section('header')
<header class="masthead" style="background-image: url('images/Register.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Lis Store</h1>
              <span class="subheading">Not Registered, Register Now!!!!</span>
            </div>
          </div>
        </div>
      </div>
    </header>

@endsection

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4  mx-auto">
       
       @if(count($errors) > 0)
        
        <div class="alert alert-danger">
                @foreach($errors->all() as $errors)
            <p>{{$errors}}</p>
                @endforeach
        </div>

        @endif
        <form action="{{route ('user.signup')}}" method="post" class="form-signin">
    <img class="mb-4" src="{{url('images/logo_lis.jpg')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-muted">&copy; Lis store</p>
       {{csrf_field()}}
    </form>
    </div>
</div>
@endsection
        