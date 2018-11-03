@extends('layouts.master', ['title' => 'Shopping cart'])


@section('content')

 @foreach($orders->chunk(3) as $orderChunk)
    <div class="row">
      @foreach($orderChunk as $orders)       
                    <div class="col-md-3 col-xs-3">
						<p class="product-category">{{ $i}}</p>
					</div>

      @endforeach 
    </div>
    @endforeach


@endsection