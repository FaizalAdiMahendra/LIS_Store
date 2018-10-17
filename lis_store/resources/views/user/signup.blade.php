@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4  mx-auto">
        <h1>Sign Up</h1>
       @if(count($errors) > 0)
        
        <div class="alert alert-danger">
                @foreach($errors->all() as $errors)
            <p>{{$errors}}</p>
                @endforeach
        </div>

        @endif
        <form action="{{route ('user.signup')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection
        