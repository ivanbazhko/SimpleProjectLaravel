@extends('template')

@section('title')Администратор@endsection

@section('contents')
    
<div class="container">
     <h2>Добавить самолёт</h2>
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
               <label for="subject">URL картинки</label>
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
               <label for="description">Краткое описание</label>
               <textarea name="description" placeholder="" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
               <label for="bigdesc">Описание</label>
               <textarea name="bigdesc" placeholder="" id="bigdesc" class="form-control"></textarea>
            </div>
            <div class="form-group">
               <label for="begin">Год начала производства</label>
               <input type="begin" name="begin" id="begin" class="form-control">
            </div>
            <button type="submit" class="btn-success">Отправить</button><br/><br/>

            @include('messages')

            <br/><br/>
         </div>

         <h2>Все сообщения</h2>
         @foreach($data as $th)
            <div class="alert col-md-5" style="background-color:rgba(0, 209, 87, 0.3);">
               <h1>{{ $th->subject }}</h1>
               <h4>{{ $th->name }}</h4>
               <h4>{{ $th->email }}</h4>
               <p>{{ $th->message }}</p>
               <p>{{ $th->created_at }}</p>
            </div>
         @endforeach
      
    <br/>
</div>
@endsection