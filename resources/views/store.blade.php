@extends('template')

@section('link')
   <link href="/css/store.css" rel="stylesheet">
@endsection

@section('title')
   Товары
@endsection

@section('contents')
<div class="row">
<div class="col-md-8">
@include('messages')
<?php
$is = 0;
?>
@foreach($dataPlanes as $th)
   <div class="alert product">
   <div class="row">
   <div class="col-md-6">
      <?php
      $is = 1;
      ?>
      <h1>{{ $th->name }}</h1>
      <h6>{{ $th->manufacture }}</h6>
      <h6>{{ $th->price }}$</h6>
      <h6>Вместимость: {{ $th->capacity }} пассажиров</h6>
      <h6>Фюзеляж:
      @if($th->fuselage=='wide')
       широкий
      @else
       узкий
      @endif
      </h6>
      <h6>Дальность: {{ $th->range }}км</h6>
      <h6>{{ $th->description }}</h6>
      <a class="nav-link" href="{{ url('onlyOne', $th->id) }}" style="color:white; font-size:20px; background-color:black; width:150px">Подробнее <span
                                class="sr-only">(current)</span></a>
   </div>
   <div class="col-md-6">
      <img src="{{ $th->image }}" style="width:300px; height:200px">
   </div>
   </div>
   </div>
@endforeach
@if($is == 0)
<h3>Ничего не найдено</h3>
@endif
</div>
<div class="col-md-4" style="height:700px;">
<a href="{{ route('cartAndBuy') }}" style="color:white; font-size:20px; background:red">Корзина и оформление покупки</a>
<div class="filter">
   <h4>Добавить фильтры</h4>
   <form action="{{ route('filter') }}" method="post" class="form-success">
           @csrf
           <div class="form-group">
               <label for="name">Название</label>
               <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
               <label for="manufacture">Производитель</label>
                  <select name="manufacture" id="manufacture" class="form-control">
                     <option value="any">Любой</option>
                     <option value="Airbus">Airbus</option>
                     <option value="ATR">ATR</option>
                     <option value="Beechcraft">Beechcraft</option>
                     <option value="Boeing">Boeing</option>
                     <option value="Bombardier">Bombardier</option>
                     <option value="Cessna">Cessna</option>
                     <option value="Embraer">Embraer</option>
                     <option value="Pilatus">Pilatus</option>
                     <option value="Sukhoi">Sukhoi</option>
                  </select>
            </div>
            <label for="price">Цена</label>
            <div class="row">
            <div class="form-group col-md-5">
               <label for="pricefrom">от</label>
               <input type="number" name="pricefrom" id="pricefrom" class="form-control">
            </div>
            <div class="form-group col-md-5">
               <label for="priceto">до</label>
               <input type="number" name="priceto" id="priceto" class="form-control">
            </div>
            </div>
            <label for="capacity">Вместимость (пассажиры)</label>
            <div class="row">
            <div class="form-group col-md-5">
               <label for="paxfrom">от</label>
               <input type="number" name="paxfrom" id="paxfrom" class="form-control">
            </div>
            <div class="form-group col-md-5">
               <label for="paxto">до</label>
               <input type="number" name="paxto" id="paxto" class="form-control">
            </div>
            </div>
            <div class="form-group">
               <label for="fuselage">Фюзеляж</label>
                  <select name="fuselage" id="fuselage" class="form-control">
                     <option value="any">Любой</option>
                     <option value="narrow">Узкий</option>
                     <option value="wide">Широкий</option>
                  </select>
            </div>
            <div class="form-group">
               <label for="minrange">Дальность в км (минимальная)</label>
               <input type="number" name="minrange" id="minrange" class="form-control">
            </div>

            <div class="row">
            <div class="col-md-8">
            <button type="submit" class="btn-success">Применить</button><br/><br/>
            </div>

            <div class="col-md-4">
            <input type="reset" value="Сбросить" class="btn-danger"><br/><br/>
            </div>

            <br/><br/>
            </div>
            </div>
         </form>
</div>
</div>
</div>
@endsection