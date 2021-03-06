<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>laptop Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<style>
    #cards{
        float: left;
        margin-left: 5.2%;
        border-style: none;


    }
    #cards:hover{
        background-color: #d1d1d1;
    }
</style>

<body id="page-top">


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: black;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Lustos Computer</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Product</a>
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


<!--icon-->
<section class="page-section" style="background-color: black; margin-top: 5%;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <a class="portfolio-item" href="{{url('/laptop')}}">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
                <h4 class="service-heading" style=" color: white;">Laptop</h4>
                </a>
            </div>
            <div class="col-md-4" >
                <a class="portfolio-item" href="{{url('/laptop')}}">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-desktop fa-stack-1x fa-inverse"></i>
          </span>
                <h4 class="service-heading" style=" color: white;">Desktop</h4>
                </a>
            </div>
            <div class="col-md-4">
                <a class="portfolio-item" href="{{url('/accesory')}}">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-keyboard fa-stack-1x fa-inverse"></i>
          </span>
                <h4 class="service-heading" style=" color: white;">Accessories</h4>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Laptop -->
<div style="height: 240vh;">
    <div class="container" style="height:70vh;">
        @foreach($desktops as $desktop)
            <div class="card" style="width: 18rem;" id="cards">
                <img class="card-img-top" src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}"  alt="desktop_images" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{ $desktop->Brand_Name }}</h5>
                    <p class="card-text">Prices: {{ $desktop->Price }} $</p>
                    <p class="card-text">Processor: {{ $desktop->Processor }} </p>
                    <a href='{{ url("/singledesktop/{$desktop->id}") }}' class="btn btn-primary">Go shop</a>
                </div>
            </div>
        @endforeach
            @foreach($desktops as $desktop)
                <div class="card" style="width: 18rem;" id="cards">
                    <img class="card-img-top" src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}"  alt="desktop_images" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $desktop->Brand_Name }}</h5>
                        <p class="card-text">Prices: {{ $desktop->Price }} $</p>
                        <p class="card-text">Processor: {{ $desktop->Processor }} </p>
                        <a href='{{ url("/singledesktop/{$desktop->id}") }}' class="btn btn-primary">Go shop</a>
                    </div>
                </div>
            @endforeach
            @foreach($desktops as $desktop)
                <div class="card" style="width: 18rem;" id="cards">
                    <img class="card-img-top" src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}"  alt="desktop_images" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $desktop->Brand_Name }}</h5>
                        <p class="card-text">Prices: {{ $desktop->Price }} $</p>
                        <p class="card-text">Processor: {{ $desktop->Processor }} </p>
                        <a href='{{ url("/singledesktop/{$desktop->id}") }}' class="btn btn-primary">Go shop</a>
                    </div>
                </div>
            @endforeach
            @foreach($desktops as $desktop)
                <div class="card" style="width: 18rem;" id="cards">
                    <img class="card-img-top" src="{{asset('/uploads/desktopimage/' .$desktop->Desktop_images)}}"  alt="desktop_images" height="300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $desktop->Brand_Name }}</h5>
                        <p class="card-text">Prices: {{ $desktop->Price }} $</p>
                        <p class="card-text">Processor: {{ $desktop->Processor }} </p>
                        <a href='{{ url("/singledesktop/{$desktop->id}") }}' class="btn btn-primary">Go shop</a>
                    </div>
                </div>
            @endforeach

    </div>
</div>



<!-- Clients -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/ba2c84a0d20797fa_800x800ar-146x56.png" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/Lenovo_logo_2015.svg-146x56.png" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/MSI Logo 1-146x56.png" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/Asus Logo 1-146x56.jpg" alt="">
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
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
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

<!-- Portfolio Modals -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>



<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

</html>

