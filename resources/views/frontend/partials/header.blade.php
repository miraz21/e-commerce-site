  <?php
  use App\Http\Controllers\Frontend\CartController;
  $total=CartController::cartItem();
  ?>

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-secondary">Overview</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
        </ul>

        <div class="col-sm-1" ></div>
        <div class="col-sm-2 text-center" style="padding-top: 1.5%" >
        <ul class="nav navbar-nav cart" >
        <li><a href="{{route('cart')}}"><i class="fas fa-cart-plus">({{$total}}) </i></a></li>    
        </ul>
        </div>
        </div>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
             @if(auth()->user())
            <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
             @else
            <li><a class="dropdown-item" href="{{route('registration')}}">Registration</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
             @endif
          </ul>
        </div>
      </div>
    </div>
  </header>