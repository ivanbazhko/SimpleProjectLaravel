<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('link')
    <link href="/css/template.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg fixed-top">
            <i style="font-size:30px; color:navy" class="shop_title">Get a Plane</i>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                @if (Auth::user())
                    <li class="nav-link" class="nav-item active">
                        <p style="color:yellow; font-size:20px;">Вы вошли в аккаунт <i style="color:red">
                        {{Auth::user()->name}}</i><span
                                class="sr-only">(current)</span></p>
                    </li>
                    @else
                    <li class="nav-link" class="nav-item active">
                        <p style="color:magenta; font-size:20px;">Вы не вошли в аккаунт <span
                                class="sr-only">(current)</span></p>
                    </li>
                @endif
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('homedirect') }}" style="color:white; font-size:20px;">Главная <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('store') }}" style="color:white; font-size:20px;">Товары <span
                                class="sr-only">(current)</span></a>
                    </li>
                        <a class="nav-link" href="{{ route('contact') }}" style="color:white; font-size:20px;">Контакты <span
                                class="sr-only">(current)</span></a>
                    </li>
                    @if (Auth::user())
                    <form action="{{ route('logout') }}" method="post" class="form-success">
                          @csrf
                           <button type="submit" class="btn-danger" style="color:white; font-size:20px;">Выйти</button>
                    </form>
                    @else
                    <button class="btn-success" style="height:40px">
                        <a class="nav-link" href="{{ route('tologin') }}" style="color:white; font-size:20px;">Войти<span
                        class="sr-only">(current)</span></a>
                    </button>
                    @endif
                </ul>
            </div>
        </nav> 
    </header>

    <div class="container" style="min-height:600px;">
        @yield('contents')
        @yield('z')
    </div>

    <footer class="page-footer font-small pt-4">
    <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <ul class="list-unstyled">
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
       <a class="nav-link" href="{{ route('admin') }}" style="color:black; font-size:20px;">Админ <span
                                class="sr-only">(current)</span></a>
        @if (Auth::user() && Auth::user()->isAdmin)                       
        <a class="nav-link" href="{{ route('adminOrder') }}" style="color:black; font-size:20px;">Список всех заказов <span
                                class="sr-only">(current)</span></a> 
        @endif                                                                            
      </div>
    </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a>Get a Plane shop</a>
    </div>
    </footer>
</body>
</html>