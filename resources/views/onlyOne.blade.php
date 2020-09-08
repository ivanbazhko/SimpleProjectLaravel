@extends('template')

@section('link')
   <link href="/css/store.css" rel="stylesheet">
@endsection

@section('title')
   Товары
@endsection

@section('contents')
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
      <img src="{{ $th->image }}" style="width:300px; height:200px">
   </div>
   </div>
   </div>
</div>
@endsection