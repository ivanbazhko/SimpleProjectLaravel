@extends('template')

@section('title')
   Список всех заказов
@endsection
<?php
$count=1;
?>
@section('contents')
<div class="container">
@include('messages')
     <h1>Список всех заказов</h1>
     <div class="col-md-10">
         @foreach($data as $th)
            <div class="row">
            <div class="col-md-10">
               <h1 style="color:navy">{{$count}}</h1>
               <h3>{{ $th->customer }}</h3>
               <h3>{{ $th->email }}</h3>
               <h3>{{ $th->price }}$</h3>
               <h3>{{ $th->items }}</h3>
               <h3>{{ $th->adress }}, {{ $th->city }}, {{ $th->country }}</h3>
               <h3>Аэропорт доставки: {{ $th->airport }}</h3>
               @if($th->complete)
                  <h2 style="color:lime">Выполнен</h2>
               @else
                  <h2 style="color:red">Ожидает выполнения</h2>
               @endif
               <?php
                  $count = $count + 1;
               ?>
            </div>
            <div class="col-md-2">
            <form action="{{ route('deleteOrder') }}" method="post" class="form-success">
            @csrf
            <input style="display:none;" name="id" id="id" value="{{$th->id}}" class="form-control">
            <button type="submit" class="btn-danger" onclick="return confirm('Вы точно хотите удалить заказ?')">Удалить</button>
            </button>
            </form>
            <form action="{{ route('updateAnOrder') }}" method="post">
            @csrf
               <input style="display:none;" name="id" id="id" value="{{ $th->id }}" class="form-control">
               <input style="display:none;" name="items" id="items" value="{{ $th->items }}" class="form-control">
               <input style="display:none;" name="price" id="price" value="{{ $th->price }}" class="form-control">
               <input style="display:none;" type="text" class="form-control" value="{{ $th->customer }}" name="customer" id="customer" placeholder="Иванов Иван Иванович">
               <input style="display:none;" type="email" class="form-control" value="{{ $th->email }}" name="email" id="email" placeholder="Email@email.com">
               <input style="display:none;" type="text" value="{{ $th->adress }}" class="form-control" name="adress" id="adress" placeholder="Улица Московская, дом 000, квартира 000">
               <input style="display:none;" type="text" value="{{ $th->city }}" class="form-control" name="city" id="city">
               <input style="display:none;" type="text" value="{{ $th->country }}" class="form-control" name="country" id="country">
               <input style="display:none;" type="text" value="{{ $th->airport }}" class="form-control" name="airport" id="airport">
               @if($th->complete)
               <input style="display:none;" type="text" value="{{$th->complete}}" class="form-control" name="complete" id="complete">
               <button type="submit" class="btn btn-danger">Отметить как невыполненный</button>
               @else
               <input style="display:none;" type="text" value="{{$th->complete}}" class="form-control" name="complete" id="complete">
               <button type="submit" class="btn btn-success">Отметить как выполненный</button>
               @endif
            </form>
            </div>
            </div>   
         @endforeach
      </div>
</div>
@endsection
