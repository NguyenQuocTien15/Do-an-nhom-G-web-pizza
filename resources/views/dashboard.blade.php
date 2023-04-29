<!DOCTYPE html>
<html>

<head>
    <title>Tomato's Pizza</title>
    <link rel="shortcut icon" type="image" href="{{asset('image/img_03.png')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <a href="@if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}" style="text-decoration: none;">
                <h1>Tomato's Pizza </h1>
            </a>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="{{ route('login') }}">Login</a></button>
            <button id="btn-signup"><a href="{{ route('register-user') }}">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
    <!-- top navbar -->

    <div class="home-section">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <ul class="navbar-nav">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('promotion') }}">Khuyến Mãi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('voucher') }}">Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Thực Đơn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('orderTracking') }}">Theo Dõi Đơn Hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('storeListing') }}">Danh Sách Cửa Hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                            </li>
                            @endguest
                        </ul>

                </div>
            </div>
            <form class="d-flex m-auto ">
                <input class="form-control  me-15" style="width: max-content;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-3 " type="submit" id="search-btn">Search</button>
            </form>
        </nav>
        @yield('content')



    </div>
    </div>
    </nav>
    <!-- navbar -->

</body>

</html>