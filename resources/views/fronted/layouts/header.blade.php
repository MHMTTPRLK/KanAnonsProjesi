<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('fronted/img/favicon1.png')}} ">
    @toastr_css
    <link rel="stylesheet" href="{{asset('fronted/css/bootstrap.min.css')}} ">

    <link rel="stylesheet" href="{{asset('fronted/css/animate.css')}} ">

    <link rel="stylesheet" href="{{asset('fronted/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('fronted/css/themify-icons.css')}} ">

    <link rel="stylesheet" href="{{asset('fronted/css/flaticon.css')}} ">

    <link rel="stylesheet" href="{{asset('fronted/css/magnific-popup.css')}} ">

    <link rel="stylesheet" href="{{asset('fronted/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('fronted/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>

</style>
</head>
<body >

<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('fronted/img/logo1.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home')}}">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('hakkimizda')}}">Hakkında</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('anonsList')}}">Anonslar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('gonullu')}}">Gönüllülerimiz</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('iletisim')}}">İletişim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('anons-duyuru')}}">Anons&Duyuru</a>
                            </li>
                            @guest
                                @if(Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('giris')}}">Giriş/Kayıt</a>
                                    </li>
                                @endif
                                @else
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{route('giris')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{Auth::user()->name." ".Auth::user()->surname}}
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->utype)
                                            <a class="dropdown-item" href="{{route('admin.dashboard')}}">Admin Panel</a>
                                      @endif

                                    <a class="dropdown-item" href="{{route('bilgilerim')}}">Bilgilerim</a>
                                    <a class="dropdown-item" href="{{route('anonslarim',Auth::user()->id)}}">Anonslarım</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Çıkış Yap</a>

                                </div>

                            </li>
                        @endguest
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('giris')}}">Giriş/Kayıt</a>
                            </li>
                            -->

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

