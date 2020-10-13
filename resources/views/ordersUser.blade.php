@extends('template')

@section('title')
   Ваши заказы
@endsection

<?php
$count=1;
?>

@section('contents')
<h1>Список всех Ваших заказов</h1>
     <div class="col-md-10">
         @foreach($data as $th)
            <div class="row">
            <div class="col-md-10">
               <h1 style="color:navy">{{$count}}</h1>
               <h3>{{ $th->items }}</h3>
               <h3>{{ $th->price }}$</h3>
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
         </div>   
         @endforeach
         @if($count == 1)
         <h1>пуст</h1>
         @endif
      </div>   
@endsection
