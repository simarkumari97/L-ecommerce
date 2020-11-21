<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
}
?>



  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <a class="navbar-brand text-success disable" href="#">E.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse nav_float" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/myorder">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/view_cart">Cart({{ $total }})</a>
        </li>

      
</ul>
<form class="form-inline my-2 my-lg-0" action="/search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <ul class="navbar-nav ">
  <li class="nav-item text-muted">
    @if(Session::has('user'))
    {{-- <p>{{ Session::get('user')['name'] }}</p> --}}
    <a class="nav-link text-success" href="/logout">Logout</a>
    @else
    <a class="nav-link text-success inline-block" href="/login">Login</a>
    <a class="nav-link text-success inline-block" href="/register">Register</a>
    @endif
</li>
</ul>
</div>
</nav>
