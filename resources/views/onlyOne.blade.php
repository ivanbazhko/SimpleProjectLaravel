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
   </div>
</div>
@endsection