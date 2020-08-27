@extends('template')

@section('contents')
<br/>
<div class="row">
   <div class="col-md-2">
   </div>
   <div class="col-md-1">
      <button class="btn-success">
           <a class="nav-link" href="{{ route('tologin') }}" style="color:ghostwhite; font-size:20px;">Войти<span
           class="sr-only">(current)</span></a>
       </button>
   </div>
   <div class="col-md-1">
   </div>
   <div class="col-md-4">
      <button class="btn-success">
           <a class="nav-link" href="{{ route('toreg') }}" style="color:ghostwhite; font-size:20px;">Зарегистрироваться<span
           class="sr-only">(current)</span></a>
       </button>
   </div>
</div> 
<br/>
@include('messages')
@yield('forauth')  
@endsection