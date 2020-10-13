@extends('template')

@section('title')
   Корзина и оформление покупки
@endsection

<?php
$smth = 0;
$info = '';
$a = '';
$items = \ShoppingCart::all();
$total = \ShoppingCart::total();
?>

@section('contents')
<div class="row">
<div class="col-md-6">
@foreach($items as $th)
<?php
$price = $th->price * $th->qty;
$id = $th->__raw_id;
$smth = 1;
$a .= $th->name;
$a .= ' ';
$a .= 'x';
$a .= ' ';
$a .= $th->qty;
$a .= '; ';
?>
   <div class="alert product">
      <h3>{{ $th->name }} x {{ $th->qty }}</h1>
      <h6>{{ $price }}$</h6>
   </div>
   <form action="{{ route('updateCartItem') }}" method="post" class="form-success">
           @csrf
            <div class="form-group col-md-5">
               <label for="amount">Изменить количество</label>
               <input type="number" value='{{$th->qty}}' name="amount" id="amount" class="form-control">
               <input style="display:none;" name="id" id="id" value="{{$id}}" class="form-control">
            </div>
            <button type="submit" class="btn-success">Обновить заказ</button>
            <input type="reset" value="Отмена" class="btn-info">
            </button>
    </form>
    <form action="{{ route('deleteCartItem') }}" method="post" class="form-success">
           @csrf
            <input style="display:none;" name="id" id="id" value="{{$id}}" class="form-control">
            <button type="submit" class="btn-danger">Удалить заказ</button>
            </button>
    </form>
@endforeach
<?php
$a = rtrim($a, ' ');
$a = rtrim($a, ';');
?>
@if($smth!==0)
<h2 style="color:red">Всего: {{$total}}$</h2>
@else
<h2 style="color:red">В Вашей корзине ещё ничего нет</h2>
@endif
<form action="{{ route('clearCart') }}" method="post" class="form-success">
           @csrf
            <button type="submit" class="btn-danger">Очистить корзину</button>
            </button>
</form>
</div>
@if ($smth!==0)
@if (Auth::user())
<div class="col-md-6">
@include('messages')
<form action="{{ route('addAnOrder') }}" method="post">
@csrf
  <input style="display:none;" name="items" id="items" value="{{$a}}" class="form-control">
  <input style="display:none;" name="price" id="price" value="{{$total}}" class="form-control">
  <div class="form-group">
    <label for="customer">ФИО</label>
    <input readonly type="text" class="form-control" value="{{Auth::user()->name}}" name="customer" id="customer" placeholder="Иванов Иван Иванович">
  </div>
  <div class="form-group">
      <label for="email">Email</label>
      <input readonly type="email" class="form-control" value="{{Auth::user()->email}}" name="email" id="email" placeholder="Email@email.com">
   </div>
  <div class="form-group">
    <label for="adress">Адрес</label>
    <input type="text" class="form-control" name="adress" id="adress" placeholder="Улица Московская, дом 000, квартира 000">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">Город</label>
      <input type="text" class="form-control" name="city" id="city">
    </div>
    <div class="form-group col-md-6">
      <label for="country">Страна</label>
      <input type="text" class="form-control" name="country" id="country">
    </div>
    <div class="form-group">
      <label for="airport">Желаемый аэропорт доставки</label>
      <input type="text" class="form-control" name="airport" id="airport">
    </div>
    <div class="form-group">
      <label for="airport" style="color:orangered; background:black; margin:30px; padding:10px">СТОИМОСТЬ: {{ $total }}$</label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Отправить заказ</button>
</form>
</div>
@else
<h2 style="color:navy">Пожалуйста, войдите в аккаунт или авторизируйтесь чтобы сделать заказ</h2>
@endif
@endif
</div>
@endsection
