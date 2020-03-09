<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Team</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('../css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('vendors/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css">
    <link href="{{url('https://fonts.googleapis.com/css?family=Kaushan+Script')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic')}}"
          rel='stylesheet' type='text/css'>
    <link
        href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic')}}"
        rel="stylesheet" type="text/css">
    <link href="{{url('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700')}}" rel='stylesheet'
          type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{url('css/agency.min.css')}}" rel="stylesheet">
    <link href="{{url('css/stylish-portfolio.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Lustos Computer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<center>
    <form action="{{ url('laptop', array($desktop->id)) }}" method="post" style="border-style: none; margin-top: 10%;">
        <h2><a href="/desktop" class="text-decoration-none">Desktop</a></h2>
        @csrf
        <div class="card a" style="max-width: 60%;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}" width="450px" height="450px" alt="Laptop_images">
                </div>
                <div class="col-md-5">
                    <div class="card-body float-right">
                        <div  class="card-text">
                            <h2><b>{{ $desktop->Brand_Name }}</b></h2>
                            <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>

                        <p class="card-text">Availability: <b>In Stock</b></p>
                        <div class="row">
                            <p class="lead">Model: {{$desktop->Model}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Brand_Name: {{$desktop->Brand_Name}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Os: {{$desktop->Os}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Price: {{$desktop->Price}}$</p>
                        </div>
                        <div class="row">
                            <p class="lead">Processor: {{$desktop->Processor}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Graphic: {{$desktop->Graphics}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Display: {{$desktop->Display}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Storage: {{$desktop->Storage}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Memory: {{$desktop->Memory}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Battery: {{$desktop->Battery}}</p>
                        </div>
                        <div class="row">
                            <p class="lead">Keyboard: {{$desktop->Keyboard}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</center>
<style>
    .card-body {
        margin-bottom: 10vh;
        margin-left: 5vw;
    }
    .card-text {
        margin-bottom: 3vh;
    }
    .price {
        font-size: large;

    }
    .bg {
        background-color: #ba9106;
    }
    .a {
        margin-left: 10%;
        margin-top: 3%;
    }
</style>



<!-- Clients -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="{{url('img/logos/ba2c84a0d20797fa_800x800ar-146x56.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="{{url('img/logos/Lenovo_logo_2015.svg-146x56.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="{{url('img/logos/ba2c84a0d20797fa_800x800ar-146x56.png')}}" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="{{url('img/logos/Lenovo_logo_2015.svg-146x56.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                       required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                       required="required"
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                       required="required"
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *"
                                          required="required"
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2019</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

</html>

