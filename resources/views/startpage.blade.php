<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script type="text/javascript" src ="{{url('js/bootstrap.js')}}"></script>
</head>
<body>
<div class="sidebar-container">
    <div class="sidebar-logo">
        Computer Shop
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
    </ul>
</div>

<div class="content-container">

    <div class="container-fluid">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <p>I don't know how to insert homelaptop in here!</p>
        </div>

    </div>
</div>
</body>
</html>
