{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
<h4>ttttttttttttttttttttt</h4>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as normal user!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="my_css/normal_users.css">

</head>
<body>

        {{-- <div class="bg-top navbar-light">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center align-items-stretch">
                        <div class="col-md-4 d-flex align-items-center py-4">
                            <a class="navbar-brand" href="index.html">Children's <span>House</span></a>
                        </div>
                        <div class="col-lg-8 d-block">
                            <div class="row d-flex">
                                <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                    <div class="text">
                                        <span>Email</span>
                                        <span>children'shouse@email.com</span>
                                    </div>
                                </div>
                                <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                    <div class="text">
                                        <span>Call</span>
                                        <span>Call Us: +94 1234567</span>
                                    </div>
                                </div>
                                <div class="col-md topper d-flex align-items-center justify-content-end">
                                    <p class="mb-0">
                                        <a href="{{ route('login') }}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                                            <span>Sign In</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div> --}}




              <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container d-flex align-items-center px-4">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
                  <form action="#" class="searchform order-lg-last">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
                  </div>
                </form>
                  <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item "><a href="{{ URL::to('/') }}" class="nav-link pl-0">Home</a></li>
                        {{-- <li class="nav-item "><a href="{{ URL::to('/about') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ URL::to('/events') }}" class="nav-link">Events</a></li> --}}
                        <li class="nav-item active"><a href="{{ URL::to('#') }}" class="nav-link">Profile</a></li>
                        {{-- <li class="nav-item"><a href="{{ URL::to('/blog') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> --}}
                        <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Sign Out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <!-- END nav -->

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    <div class="contact-section">

        <div class="col-md-4">
            <div class="card">
                        <img src="/w3images/team2.jpg" alt="{{ Auth::user()->name }}" style="width:100%">
                        <h1><a class="lable" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </h1>
                            <p class="title">{{ Auth::user()->email }}</p>

                            <div style="margin: 24px 0;">
                              <a href="#"><i class="fa fa-dribbble"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                              <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                            <p><button><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Sign Out</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </button></p>
            </div>
        </div>

    </div>

</body>
</html>
