@extends('template')

@section('title')Администратор@endsection

@section('contents')
    <button class="btn-success">
        <a class="nav-link" href="{{ route('contactreceive') }}" style="color:ghostwhite; font-size:100px;">Messages <span
        class="sr-only">(current)</span></a>
    </button><br/><br/>
    <button class="btn-success">
        <a class="nav-link" href="{{ route('add') }}" style="color:ghostwhite; font-size:100px;">Add <span
        class="sr-only">(current)</span></a>
    </button><br/><br/>
@endsection