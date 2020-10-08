@extends('template')

@section('link')
   <link href="/css/store.css" rel="stylesheet">
@endsection

@section('title')
    {{ $th->subject }}
@endsection

@section('contents')
<div class="container">
   <div class="alert product">
   <div class="row">
   <div class="alert col-md-6" style="background-color:rgba(0, 209, 87, 0.3);">
               <h1>{{ $th->subject }}</h1>
               <h4>{{ $th->name }}</h4>
               <h4>{{ $th->email }}</h4>
               <p>{{ $th->message }}</p>
               <p>{{ $th->created_at }}</p>
               <a href="{{route('message-delete', $th->id)}}" onclick="return confirm('Вы точно хотите удалить это сообщение?')"><button class="btn btn-danger">Удалить</button></a>
    </div>
    </div>
    </div>
</div>
@endsection