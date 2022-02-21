<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

    <head>
    
    <link rel="preload" as="image" href="assets/images/projects/work-01.jpg">
    <link rel="preload" as="image" href="assets/images/projects/work-06.png">
    <link rel="preload" as="image" href="assets/images/projects/work-04.jpg">
    <link rel="preload" as="image" href="assets/images/projects/work-02.jpg">
    <link rel="preload" as="image" href="assets/images/projects/work-03.png">
    <link rel="preload" as="image" href="assets/images/projects/work-05.jpg">
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Agency HTML Template</title>
    <meta name="description" content="Agency HTML Template. ">
    <meta name="keywords" content="agency, business, corporate, company, clean, modern, personal, portfolio, professional, startup, studio">

    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple_touch_icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    
    <!-- All CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <style>
       .portfolio-project-box{
           margin:20px;
       }
       
       .portfolio-project-thumbnail{
           width:100%;
       }
       
       .portfolio-project-thumbnail img{
           width:100%;
       }
   </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
            
            <div class="covers">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
    </div>

    <!-- =========================== 1. Top Header Section =========================================== -->

    <div class="top-header d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12">
                    <div class="top-header-contact">
                        <a href="tel:+1(718)73493">
                            <i class="fas fa-phone-alt"></i>+1 (718) 73493
                        </a>
                    </div>
                    <div class="top-header-contact">
                        <a href="mailto:info@example.com">
                            <i class="fas fa-envelope"></i>info@example.com
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-0 text-right top-header-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.snapchat.com/"><i class="fab fa-snapchat m-0"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================== 2. Menu Section =========================================== -->

    <div class="menu-header d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <a href=" {{ url('/') }} "><img class="logo" src="assets/images/logo/site-logo/logo.png" alt="Habu"></a>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <nav id="mobile-menu" class="menu-area d-lg-flex align-items-center ml-auto">
                        <ul >
                            <li class="current-menu-item"><a href=" {{ url('/') }} ">Home</a></li>
                            <li><a href=" {{ url('about-us') }} ">About</a></li>
                            <li><a href=" {{ url('pricing') }} ">Pricing</a></li>
                            <li><a href=" {{ url('services') }} ">Services</a>
                                <ul>
                                    <li><a href=" {{ url('development') }} ">Web Development</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=" {{ url('blog') }} ">Blog</a>
                                <!-- <ul>
                                    <li><a href=" {{ url('blog-info') }} ">Blog Details</a></li>
                                </ul> -->
                            </li>
                            <li><a href=" {{ url('contact-us') }} ">Contact</a></li>

                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                    <a href=" {{ url('contact-us') }} " class="large-blue-button menu-button">Get a quote</a>
                </div>
            </div>
        </div>
    </div>


</body>
</div>