@extends('template')

@section('contents')

<h2>Изменить самолёт</h2>
         <div class="col-md-6">
         <form action="{{ route('adding') }}" method="post" class="form-success">
           @csrf
            <div class="form-group">
               <label for="name">Название</label>
               <input type="text" name="name" value="{{$th->name}}" placeholder="" id="name" class="form-control">
            </div>
            <div class="form-group">
               <label for="manufacture">Производитель</label>
                  <select name="manufacture" value="{{$th->manufacture}}" id="manufacture" class="form-control">
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
            <div class="form-group">
               <label for="subject">URL картинки</label>
               <input type="text" name="image" value="{{$th->image}}" placeholder="" id="image" class="form-control">
            </div>
            <div class="form-group">
               <label for="price">Цена</label>
               <input type="number" name="price" value="{{$th->price}}" placeholder="" id="price" class="form-control">
            </div>
            <div class="form-group">
               <label for="capacity">Вместимость</label>
               <input type="number" name="capacity" value="{{$th->capacity}}" placeholder="" id="capacity" class="form-control">
            </div>
            <div class="form-group">
               <label for="fuselage">Фюзеляж</label>
                  <select name="fuselage" value="{{$th->fuselage}}" id="fuselage" class="form-control">
                     <option value="narrow">Узкий</option>
                     <option value="wide">Широкий</option>
                  </select>
            </div>
            <div class="form-group">
               <label for="range">Дальность в км</label>
               <input type="number" value="{{$th->range}}" name="range" id="range" class="form-control">
            </div>
            <div class="form-group">
               <label for="description">Краткое описание</label>
               <textarea name="description" placeholder="" id="description" class="form-control">{{$th->description}}</textarea>
            </div>
            <div class="form-group">
               <label for="bigdesc">Описание</label>
               <textarea name="bigdesc" placeholder="" id="bigdesc" class="form-control">{{$th->bigdesc}}</textarea>
            </div>
            <div class="form-group">
               <label for="begin">Год начала производства</label>
               <input type="begin" value="{{$th->begin}}" name="begin" id="begin" class="form-control">
            </div>
            <button type="submit" class="btn-success">Отправить</button><br/><br/>

            @include('messages')

            <br/><br/>
         </div>

@include('messages')
@yield('forauth')  
@endsection