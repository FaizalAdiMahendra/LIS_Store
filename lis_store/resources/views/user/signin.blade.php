@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        
       @if(count($errors) > 0)
        
        <div class="alert alert-danger">
                @foreach($errors->all() as $errors)
            <p>{{$error}}</p>
                @endforeach
        </div>
        @endif


    <form action="{{route ('user.signin')}}" method="post" class="form-signin">
    <img class="mb-4" src="{{url('images/logo_lis.jpg')}}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; Lis store</p>
       {{csrf_field()}}
    </form>
    </div>
</div>
@endsection
        
@section('link')

@endsection