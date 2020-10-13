@extends('template')

@section('link')
   <link href="/css/store.css" rel="stylesheet">
@endsection

@section('title')
    {{ $th->name }}
@endsection

<?php
$id = $th->id;
?>

@section('contents')
@include('messages')
<div class="row">
   <div class="alert product">
   <div class="row">
   <div class="col-md-6">
      <h1>{{ $th->name }}</h1>
      <h6>Производитель: {{ $th->manufacture }}</h6>
      <h6>Цена: {{ $th->price }}$</h6>
      <h6>Вместимость: {{ $th->capacity }} пассажиров</h6>
      <h6>Фюзеляж:
      @if($th->fuselage=='wide')
       широкий
      @else
       узкий
      @endif
      </h6>
      <h6>Дальность: {{ $th->range }}км</h6>
      <h6>{{ $th->bigdesc }}</h6>
      <h6>Год начала производства: {{ $th->begin }}</h6>
   </div>
   <div class="col-md-6">
      <img src="{{ $th->image }}" style="width:500px; height:400px">
   </div>
   </div>
   @if (Auth::user() && Auth::user()->isAdmin)
   <a href="{{route('update', $th->id)}}"><button class="btn btn-primary">Изменить</button></a>
   <a href="{{route('plane-delete', $th->id)}}" onclick="return confirm('Вы точно хотите удалить самолёт {{ $th->name }}?')"><button class="btn btn-danger">Удалить</button></a>
   @endif
   <form action="{{ route('toCart') }}" method="post" class="form-success">
           @csrf
            <div class="form-group col-md-5">
               <label for="amount">Количество</label>
               <input type="number" name="amount" id="amount" class="form-control">
               <input style="display:none;" name="id" id="id" value="{{$id}}" class="form-control">
            </div>
            <button type="submit" class="btn-success">Добавить в корзину</button>
            <input type="reset" value="Сбросить" class="btn-danger">
            </button>
   </form>
   @if (Auth::user())
   <div class="col-md-6">
   <form action="{{ route('comment') }}" method="post" class="form-success">
           @csrf
            <input style="display:none;" name="planeId" id="planeId" value="{{$id}}" class="form-control">
            <input style="display:none;" name="userName" id="userName" value="{{Auth::user()->name}}" class="form-control">
            <div class="form-group">
               <label for="rate">Оцените этот самолёт</label>
                  <select name="rate" id="rate" class="form-control">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
            </div>
            <div class="form-group">
               <label for="text">Комментарий</label>
               <textarea name="text" id="text" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn-success">Опубликовать</button>
            <input type="reset" value="Сбросить" class="btn-danger">
            </button>
   </form>
   </div>
   @else
   <h3>Зарегистрируйтесь или войдите в аккаунт чтобы написать комментарий</h3>
   @endif
   <?php
      $number=0;
      $ratecount=0;
   ?>
   <h2 style="color:blue; margin:10px;">Комментарии</h2>
   <div class="row">
   <div class="col-md-5">
   @foreach($com as $th)
         <div class="col-md-10">
            <div class="col" style="background:ghostwhite; margin:10px;">
            <?php
            $number=$number+1;
            ?>
               <h3 style="color:blue">{{ $number }}. Автор: {{ $th->userName }} </h3>
               <h6>Оценка: {{ $th->rate }}</h6>
               <h6>{{ $th->text }}</h6>
               @if (Auth::user() && Auth::user()->isAdmin)
            <form action="{{ route('deleteComment') }}" method="post" class="form-success">
            @csrf
            <input style="display:none;" name="id" id="id" value="{{$th->planeId}}" class="form-control">
            <button type="submit" class="btn-danger" onclick="return confirm('Вы точно хотите удалить комментарий?')">Удалить</button>
            </button>
            </form>
               @endif
         </div>
         <?php
            $ratecount=$ratecount + $th->rate;
         ?>
         </div>         
         @endforeach
         @if($number !== 0)
         <?php
            $ratecount=round($ratecount/$number);
            $left=5-$ratecount;
         ?>
   </div>
   <div class="col-md-4">
   <h2>Средняя оценка:</h2>
   @for($j=0; $j<$ratecount; $j++)
   <img src="https://img.pngio.com/gold-star-png-image-purepng-free-transparent-cc0-png-image-library-yellow-star-png-no-background-1100_1100.png" style="width:50px; height:50px;">
   @endfor
   @for($x=0; $x<$left; $x++)
   <img src="https://www.freeiconspng.com/uploads/star-army-icon-11.png" style="width:50px; height:42px;">
   @endfor
   @else
   <h2>У этого самолёта ещё нет комментариев</h2>
   @endif
   </div>
   </div>
   </div>
</div>
@endsection