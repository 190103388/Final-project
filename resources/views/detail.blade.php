@extends('.master')
@section("content")
<!-- <div class="container">
	 <div class="row">
     <div class="col-sm-6">
       <img class="detail-img" src="{{$products['gallery']}}">
     </div>
      <div class="col-sm-6">
       <a href="/">Go back</a>
       <h2>{{$products['name']}}</h2>
       <h3>Цена: {{$products['price']}} KZT</h3>
       <h4>Описание: {{$products['description']}}</h4>
       <h4>Rating: {{$products['rank']}}</h4>
       <br><br>
       <form action="add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value={{$products['id']}}>
        <button class="btn btn-primary">Добавить в Корзину</button>
        </form>
       <br><br>
       <button class="btn btn-success">Купить сейчас</button>
       <br><br>
     </div>
   </div>
</div> -->
<div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <a class="go_back" href="http://localhost/Project-en/Final-project/public/">Go back</a>
        <img src="{{$products['gallery']}}" width="100%" id="productImg">
      </div>
      <div class="col-2">
        <h1>{{$products['name']}}</h1>
        <h4>KZT {{$products['price']}}.0</h4>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value={{$products['id']}}>
        <button class="btn2">Добавить в Корзину</button>
        </form>
        <a href="#" class="btn3">Купить прямо сейчас</a>
        <h3>Общая Информация <i class="fa fa-indent" ></i> </h3>
        <br>
        <p>{{$products['description']}}</p>
      </div>
    </div>
  </div>
  </div>
  <style type="text/css">
.btn2{
  display: inline-block;
  border: 1px solid #ff523b;
  background:transparent;
  color: #ff523b;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}
.btn2:hover{
  background:#563434;
}
.btn3{
  display: inline-block;
  
  background: #ff523b;
  color: #ffff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}
.btn2:hover{
  background:#563434;
}
.go_back{
  border: 1px solid #ff523b
  color: #ffff;
  border-radius: 30px;
  transition: background 0.5s;
}
.btn3{
  display: inline-block;
  
  background: #ff523b;
  color: #ffff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}
  </style>
@endsection