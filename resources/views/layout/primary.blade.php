<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/layout/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" href="{{asset('js/app.js')}}"></script>
    <title>Home</title>
</head>
<body>
    @section('sidebar')
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <img class="navbar-brand mr-2" href="img/coffee_logo.png" height="50" width="50"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/coffee/create">New Item</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" id="navbar_input_search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="navbar_btn_search" type="submit">Search</button>
                </form>
            </div>
        </nav>
    @show

    <div class="container" id="menu_container">
        @yield('content')
    </div>
</body>
</html>
