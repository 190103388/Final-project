@extends('.master')
@section("content")
<div class="custum-product">
  <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Количество</td>
        <td>KZT {{$total}}</td>
      </tr>
      <tr>
        <td>Налог</td>
        <td>KZT 0</td>
      </tr>
      <tr>
        <td>Доставка</td>
        <td>KZT 15000.0</td>
      </tr>
      <tr>
        <td>Сумма</td>
        <td>KZT {{$total + 15000}}</td>
      </tr>
    </tbody>
  </table>
  <div>
    <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    <textarea type="email" name="address" placeholder="enter your adress" class="form-control">
  </textarea>
  <div class="form-group">
    <label for="pwd">Способ Оплаты</label><br><br>
    <input type="radio" value="cash" name="payment"><span>Оплата онлайн</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Оплата наличкой</span><br><br>
    <input type="radio" value="cash" name="payment"><span>Оплата после доставки</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">Оплатить</button>
</form>
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