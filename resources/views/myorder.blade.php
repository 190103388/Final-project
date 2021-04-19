@extends('.master')
@section("content")
<div class="custum-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
    <h3> Мои заказы</h3>
    
    @foreach($orders as $item)
    <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
          <div class="col-4">
        <img class="trending-image" src="{{$item->gallery}}">
        </div>
      </a>
      </div>
      <div class="col-sm-4">
        <div class="">
          <h4>Названия : {{$item->name}}</h4>
          <h5>Статус доставки : {{$item->status}}</h5>
          <h5>Адресс : {{$item->address}}</h5>
          <h5>Статус оплаты : {{$item->payment_status}}</h5>
          <h5>Способ оплаты : {{$item->payment_method}}</h5>
        </div>
      </div>
      </a>
    </div>
    @endforeach
  </div>
 
  </div>
</div>

</div>
<style type="text/css">
  .rating .fa{
  color: #ff523b;

}
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
</style>
@endsection