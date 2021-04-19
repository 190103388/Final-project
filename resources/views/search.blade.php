@extends('.master')
@section("content")
<div class="custum-product">
  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
    <div class="trending-wrapper">
    <h3> Результаты  Поиска</h3>
    @foreach($products as $item)
    <div class="searched-item">
      <a href="detail/{{$item['id']}}">
         <!--  <img class="trending-image" src="{{$item['gallery']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
 -->
          <div class="col-4">
        <img class="trending-image" src="{{$item['gallery']}}">
        <h4>{{$item['name']}}</h4>
        <h5>{{$item['description']}}</h5>
        <div class="rating">
          <i class="fa fa-star" ></i>
          <i class="fa fa-star" ></i>
          <i class="fa fa-star" ></i>
          <i class="fa fa-star" ></i>
          <i class="fa fa-star-o"></i>
        </div>

        <p>{{$item['price']}}.0 KZT</p>
      </div>
        </a>
    </div>
    @endforeach
  </div>
  </div>
	
</div>
<style type="text/css">
  .rating .fa{
  color: #ff523b;
}
</style>
@endsection