

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">

  <a class="navbar-brand" href="{{ route('product.index') }}">LisStore</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    
    
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{route ('product.shoppingCart')}}"><i class="fa fa-shopping-cart"></i> Shopping Cart 
        <span class="qty">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
      </a>
      </li>
     
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
            <a class="dropdown-item" href="{{route ('user.profile')}}">User Profile</a>
            <a class="dropdown-item" href="{{route ('user.logout')}}">Logout</a>
          @else
           <a class="dropdown-item" href="{{route ('user.signup')}}">Signup</a>
          <a class="dropdown-item" href="{{route('user.signin')}}">Signin</a>
          <div class="dropdown-divider">
          </div>
            
          </div>

          @endif
         
          
        </div>
      </li>
      </ul>
    </div>
  </nav>

