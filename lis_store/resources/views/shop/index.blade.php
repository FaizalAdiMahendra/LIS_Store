@extends('layouts.master', ['title' => 'Shopping cart'])

@section('header')
<header class="masthead" style="background-image: url('images/Header.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Lis Store</h1>
              <span class="subheading">Jual Beli Lis store</span>
            </div>
          </div>
        </div>
      </div>
    </header>

@endsection

@section('link')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
@endsection

@section('content')



@if(Session::has('success'))
  <div class="row"> 
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      
      <div id="charge-message" class="alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
  </div>
@endif

    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)       
                    <div class="col-md-3 col-xs-3">
						<div class="product">
							<div class="product-img">
								<img src="{{$product->imagePath}}" alt="">
								<div class="product-label">
									
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">{{$product->typeProduct}}</p>
								<h3 class="product-name"><a href="#">{{$product->title}}</a></h3>
								<h4 class="product-price">$ {{$product->price}} <del class="product-old-price">{{$product->price + 3}}</del></h4>
							</div>
							<div class="add-to-cart">
								<a href="{{route('product.addToCart', ['id' => $product->id])}}" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</a>
							</div>
						</div>
					</div>

      @endforeach 
    </div>
    @endforeach

@endsection

@section('scripts')
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/nouislider.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/jquery.zoom.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/main.js')}}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection

@section('comment')
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://lis-store.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//lis-store.disqus.com/count.js" async></script>

@endsection
