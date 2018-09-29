@extends('layouts.master', ['title' => 'Shopping cart'])


@section('content')
<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h1>Checout</h1>
				<h4>Total: Rp{{$total}}</h4>
				<form action="{{route('checkout')}}" method="post" id="checkout-form">
					
				</form>

				{{csrf_field()}}
				<button type="submit" class="btn btn-success">Buy</button>
			</div>

@endsection