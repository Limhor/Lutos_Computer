<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script type="text/javascript" src ="{{url('js/bootstrap.js')}}"></script>
</head>
<body>
<div class="sidebar-container" style="width: 20%">
    <div class="sidebar-logo">
        Computer Shop
        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
    </div>
    <ul class="sidebar-navigation">
        <li class="header">Categories</li>
        <li>
            <a href="{{url('/homelaptop')}}">
                <i class="fa fa-laptop" aria-hidden="true"></i> Laptop
            </a>
        </li>
        <li>
            <a href="{{url('/homedesktop')}}">
                <i class="fa fa-desktop" aria-hidden="true"></i> Desktop
            </a>
        </li>
        <li>
            <a href="{{'/home'}}">
                <i class="fa fa-headset" aria-hidden="true"></i> Accessory
            </a>
        </li>
        <li>


            <div aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </li>
    </ul>
</div>
