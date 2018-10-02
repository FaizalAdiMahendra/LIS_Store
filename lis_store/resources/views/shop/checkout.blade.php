@extends('layouts.master', ['title' => 'Shopping cart'])


@section('content')
<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h1>Checout</h1>
				<h4>Total: Rp{{$total}}</h4>
				<div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : ''}}">
					{{Session::get('error')}}
				</div>
				<form action="{{route('checkout')}}" method="post" id="checkout-form">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="address" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="address">Alamat</label>
								<input type="text" id="address" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
					
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-name">Nama Pemegang Kartu</label>
								<input type="text" id="card-name" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="card-number">Nomor Kredit Cart</label>
								<input type="text" id="card-number" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-month">Bulan Expiration</label>
										<input type="text" id="card-number" class="form-control" required>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="card-expiry-year">Tahun Expiration</label>
										<input type="text" id="card-number" class="form-control" required>
									</div>
								</div>

							</div>
						

						</div>
						<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label for="cart-cvc">CVC</label>
								<input type="text" id="card-cvc" class="form-control" required>
							</div>
						</div>
						
					</div>
					</div>

						
				</form>
				
				{{csrf_field()}}
				<button type="submit" class="btn btn-success">Buy</button>
			</div>

@endsection

@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{URL::to('src/js/checkout.js')}}"></script>
@endsection