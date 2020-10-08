@extends('template')

@section('link')
   <link href="/css/store.css" rel="stylesheet">
@endsection

@section('title')
    {{ $th->name }}
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
      <img src="{{ $th->image }}" style="width:500px; height:400px">
   </div>
   </div>
   @if (Auth::user() && Auth::user()->isAdmin)
   <a href="{{route('update', $th->id)}}"><button class="btn btn-primary">Изменить</button></a>
   <a href="{{route('plane-delete', $th->id)}}" onclick="return confirm('Вы точно хотите удалить самолёт {{ $th->name }}?')"><button class="btn btn-danger">Удалить</button></a>
   @endif
   @include('messages')
   </div>
</div>
@endsection