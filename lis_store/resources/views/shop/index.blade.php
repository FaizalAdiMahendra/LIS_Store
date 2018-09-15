@extends('layouts.master', ['title' => 'Shopping cart'])


@section('content')
<div class="row">
  <div class="col-sm-6 col-md-4">
     <div class="thumbnail">
        <img src="..." alt="..." style="max-height: 150px" class="img-responsive">
	<div class="caption">
	 <h3>Nama Product</h3>
	 <p>......<p>
         <div class="clearfix">
             <div class="pull-left price" >$12</div>
     <p><a href="" class="btn btn-success pull-right" role="button">Button</a></p>
        </div>
     </div>
    </div>
  </div>
</div>
@endsection
