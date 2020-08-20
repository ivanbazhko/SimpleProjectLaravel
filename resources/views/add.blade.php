@extends('template')

@section('title')
   Добавить новый самолёт
@endsection

@section('contents')
      <div class="container">
         <div class="col-md-6">
         <form action="{{ route('adding') }}" method="post" class="form-success">
           @csrf
            <div class="form-group">
               <label for="name">Название</label>
               <input type="text" name="name" placeholder="" id="name" class="form-control">
            </div>
            <div class="form-group">
               <label for="manufacture">Производитель</label>
                  <select name="manufacture" id="manufacture" class="form-control">
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
               <label for="subject">Картинка</label>
               <input type="text" name="image" placeholder="" id="image" class="form-control">
            </div>
            <div class="form-group">
               <label for="price">Цена</label>
               <input type="number" name="price" placeholder="" id="price" class="form-control">
            </div>
            <div class="form-group">
               <label for="capacity">Вместимость</label>
               <input type="number" name="capacity" placeholder="" id="capacity" class="form-control">
            </div>
            <div class="form-group">
               <label for="fuselage">Фюзеляж</label>
                  <select name="fuselage" id="fuselage" class="form-control">
                     <option value="narrow">Узкий</option>
                     <option value="wide">Широкий</option>
                  </select>
            </div>
            <div class="form-group">
               <label for="range">Дальность в км</label>
               <input type="number" name="range" id="range" class="form-control">
            </div>
            <div class="form-group">
               <label for="message">Описание</label>
               <textarea name="description" placeholder="" id="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn-success">Отправить</button><br/><br/>

            @include('messages')

            <br/><br/>
            </div>
      </div>
@endsection