@extends('.master')
@section("content")
<div class="custum-product">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  	@foreach($products as $item)

    <div class="item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
      	<img class="slider-img" src="{{$item['gallery']}}">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="trending-wrapper">
		<h3> Tending Products</h3>
		@foreach($products as $item)
		<div class="trending-item">
			<a href="detail/{{$item['id']}}">
		     <!--  <img class="trending-image" src="{{$item['gallery']}}">
		      <div class="">
		        <h3>{{$item['name']}}</h3>
		      </div>
 -->
          <div class="col-4">
        <img class="trending-image" src="{{$item['gallery']}}">
        <h4>{{$item['name']}}</h4>
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