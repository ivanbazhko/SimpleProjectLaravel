@extends('template')

@section('title')Сообщения@endsection

@section('contents')

@foreach($data as $th)
   <div class="alert alert-info col-md-5">
      <h1>{{ $th->subject }}</h1>
      <h4>{{ $th->name }}</h4>
      <h4>{{ $th->email }}</h4>
      <p>{{ $th->message }}</p>
      <p>{{ $th->created_at }}</p>
   </div>
@endforeach

@endsection
