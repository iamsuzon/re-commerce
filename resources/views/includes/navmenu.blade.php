<!-- jQuery library -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

<!-- Popper JS -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}

<!-- Latest compiled JavaScript -->
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}

<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="logo" width="100px" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="country">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Select Country
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">UAE</a>
                        <a class="dropdown-item" href="#">Pakistan</a>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" id="right-sideNav">
                <li class="nav-item">
                    @if(isset($_COOKIE['profile_viewer_uid']))
                        <a class="nav-link" href="{{route('user-profile')}}">My Account</a>
                    @else
                        <a class="nav-link" href="{{route('signin')}}">Sign In</a>
                    @endif
                </li>
                <li class="nav-item ml-3">
                    <a class="ad-button btn btn-success nav-link text-capitalize" href="@if(isset($_COOKIE['profile_viewer_uid']) AND $_COOKIE['profile_viewer_uid'] !== null) {{route('ad-post-view')}} @else {{route('signin')}} @endif">Place your ad</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-white border-top border-bottom" id="desktop-2nd-navbar">
    <div class="container">
        <ul class="navbar-nav m-auto" id="center-navbar">
            <li class="nav-item">
                <a class="nav-link" href="#">Daily Instrument</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mobile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Electronics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vehicles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Property</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Former Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home Instrument</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fashion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Business Industry</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropbtn">More Products</a>
                    <div class="dropdown-content">
                        <a href="#">Education</a>
                        <a href="#">Animals</a>
                        <a href="#">Agriculture</a>
                        <a href="#">IT and Software</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="scrollmenu">
    <a href="#home">Daily Instrument</a>
    <a href="#news">Mobile</a>
    <a href="#contact">Electronics</a>
    <a href="#about">Vehicles</a>
    <a href="#support">Property</a>
    <a href="#blog">Job</a>
    <a href="#tools">Former Job</a>
    <a href="#base">Services</a>
    <a href="#custom">Fashion</a>
    <a href="#more">Business Industry</a>
    <a href="#logo">Education</a>
    <a href="#friends">Animals</a>
    <a href="#partners">Agriculture</a>
    <a href="#people">IT and Software</a>
</div>
