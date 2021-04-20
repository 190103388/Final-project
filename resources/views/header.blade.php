<?php
use App\Http\Controllers\ProductController;
$total =0;
if (Session:: has('user')) {

$total = ProductController::cartItem();
}

?>
<div class="header">  
  <div class="container2">
    <div class="navbar">
      <div class="logo">
        <a href="/"><img src="{{ URL::to('/img/logo.png') }}" width="200px" style="padding-top: 30px;" ></a>
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="/  ">{{__('profile.main_page')}}</a></li>
          <li><a href="/myorders">{{__('profile.orders')}}</a></li>
          <li class="cart">
            <a href="/cartlist"><ion-icon name="basket"></ion-icon>{{__('profile.cart')}} ({{$total}}) </a>
          </li>
          @if(Session::has('user'))
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">{{__('profile.logout')}}</a></li>
          </ul>
          </li>
          @else
          <li class="">
            <a href="/login">Login</a>
          </li>
           <li class="">
            <a href="/register">Register</a>
          </li>
          @endif
        </ul>
        <form class="navbar-form navbar-left" action="/search">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">{{__('profile.search')}}</button>
      </form>
      </nav>
      <!-- <img src="images/cart.png" width="30px" height="30px;"> -->
      <img src="images/menu.png" width="30px" height="30px;" class="menu-icon" onclick="menutoggle()">
    </div>

<style type="text/css">
  .cart {
  /*background-color:  #ff523b;*/
  border: 1px solid #ff523b;
  border-radius: 20px;
  padding-right: 5px;
  padding-left: 5px;
}
.cart ion-icon{
  vertical-align: bottom;
  font-size: 25px;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: 'Poppins', sans-serif;
}
.navbar{
  display: flex;
  align-items: center;
  padding: 20px;
}
nav{
  flex: 1;
  text-align: right;
}
nav ul{
  display: inline-block;
  list-style-type: none;
}
nav ul li{
  display: inline-block;
  margin-right: 20px;

}
a{
  text-decoration: none;
  color: #555;
}
p{
  color: #555;
}
.container2{
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;

}
.row{
  display: flex;
  align-items: center;
  flex-wrap:wrap;
  justify-content: space-around;

}
.col-2{
  flex-basis: 50%;
  max-width: 500px;

}
.col-2 img{
  padding: 0px 0;
  padding-bottom: 30px;
  width: 100%;
  
}
.col-2 h1{
  font-size: 45px;
  line-height: 60px;
  margin: 25px 0;
  font-weight: 700;
}
</style>