<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alfine Cleaners Limited</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="{{asset('https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li><a href="{{url('/about-us')}}" class="nav-link">About</a></li>
                  <li><a href="{{url('/our-services')}}" class="nav-link">What We Do</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
              <a href="{{url('/')}}"><img width="150em" height="150em" src="{{asset('images/logo.jpg')}}" alt="Image" class="img-responsive"></a>
              </div>

              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-info"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="{{url('/recent-work')}}" class="nav-link">Work</a></li>
                  <li><a href="{{url('/project-gallery')}}" class="nav-link">Gallery</a></li>
                  <li><a href="{{url('/contact-us')}}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>

      @yield('main')

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <span class="footer-heading mb-4"><a href="{{url('/')}}"><img width="180em" height="180em" src="{{asset('images/logo.jpg')}}" alt="Image" class="img-responsive"></a></span>
                <p><strong><em>":keeping clean and fancy is our priority"</em></strong></p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                <li><a href="{{url('/about-us')}}">Our History</a></li>
                  <li><a href="{{url('/project-gallery')}}">Image Gallery</a></li>
                  <li><a href="{{url('/')}}">Why Us</a></li>
                  <li><a href="{{url('/our-services')}}">Our Service</a></li>
                  <li><a href="{{url('/contact-us')}}">Talk to Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Send us an email</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-info text-white" type="button" id="button-addon2">Submit</button>
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="{{url('/#')}}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="{{url('/#')}}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="{{url('/#')}}" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>| 
                    <a href="{{url('http://mtaanitech-hub.co.ke')}}">Alfine Cleaners Limited</a> | All rights reserved.</p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

     

  </body>

</html>
