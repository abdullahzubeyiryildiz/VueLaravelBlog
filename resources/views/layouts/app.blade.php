<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Vue Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


       <nav class="navbar has-shadow" >
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
                <img src="{{asset('images/logo.png')}}" alt="Pratik Yazılımcı logo" style="max-height: 4.75rem;">
            </a>

            @if (Request::segment(1) == "manage")
            <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
              <span class="icon">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
        </a>
        @endif

        <button class="button navbar-burger">
         <span></span>
         <span></span>
         <span></span>
     </button>
 </div>
 <div class="navbar-menu">
  <div class="navbar-start">
    <a class="navbar-item is-tab is-active">Learn</a>
    <a class="navbar-item is-tab">Discuss</a>
    <a class="navbar-item is-tab">Share</a>
</div> <!-- end of .navbar-start -->


<div class="navbar-end nav-menu" style="overflow: visible">
    @guest
   {{--  <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
    <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a> --}}
    <button class="dropdown is-aligned-right nav-item is-tab" style="padding-top: 25px;">
        Hey Abdullah <span class="icon"><i class="fa fa-caret-down"></i></span>
        <ul class="dropdown-menu">
            <li><a href="#">
                <span class="icon"><i class="fa fa-user m-r-10"></i></span>
            Profile</a></li>
            <li><a href="#">
                 <span class="icon"><i class="fa fa-bell m-r-10"></i></span>
            Notifications</a></li>
            <li><a href="#"> <span class="icon"><i class="fa fa-cog m-r-10"></i></span>Settings</a></li>
            <li class="seperator"> </li>
            <li><a href="#"><span class="icon"><i class="fa fa-sign-in m-r-10"></i></span>Logout</a></li>
        </ul>
    </button>
    @else
    
    @endguest
</div>
</div>

</div>
</nav>

@yield('content')

</div>
</body>
</html>
