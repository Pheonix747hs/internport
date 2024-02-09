<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Shailesh Salunkhe : Financial Freedom partner | Carrier coaching | Project management, Agile Consulting |
        Financial advising</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/button2.css">
    @vite('resources/css/app.css')

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->



    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+91 98900669615</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:ShaileshSalunkheFinFit@gmail.com">ShaileshSalunkheFinFit@gmail.com</a>
                            </li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="/"><img src="img/logo.png" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li><a href="/">Home</a>
                                        </li>

                                        <li><a href="service"> Service</a>

                                        </li>
                                        <li class="active"><a href="blog">Blogs</a>
                                        </li>
                                        <li><a href="contact">Contact Us</a></li>
                                        <li><a href="portfolio">About Me</a>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12 d-flex align-items-center justify-between">
                            <div class="get-quote m-6">
                                <a href="/#Appointment" class="btn">Book Appointment</a>

                            </div>
                            <div>
                                @if (Route::has('login'))
                                    <div style="">
                                        <button class="button2">
                                            <span>
                                                @auth
                                                    <a href="{{ route('login') }}"
                                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Account</a>
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                                                @endauth
                                            </span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Single</h2>
                        <ul class="bread-list">
                            <li><a href="/">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Blog Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                @foreach ($posts as $post)
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class=" md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <span class="font-semibold title-font text-gray-700">{{ $post->title }}</span>
                        <span class="mt-1 text-gray-500 text-sm">{{ $post->date }}</span>
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post->title }}</h2>
                        <p class="leading-relaxed">{{ $post->description }}</p>
                        
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </section>


    @auth
    <section class="text-gray-600 body-font overflow-hidden">
        <section class="mt-20 d-flex justify-center">
            <h2>Add New Blog Post</h2>
            <form method="POST" action="{{ route('blog.create') }}">
                @csrf
                <div class="mb-4">
                    <label for="title" class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" class="border-2 border-gray-300 p-2 w-full @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="text-xl text-gray-600">Description</label>
                    <input type="text" id="description" name="description" class="border-2 border-gray-300 p-2 w-full" value="{{ old('description') }}">
                </div>
                <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Submit</button>
            </form>
        </section>
    </section>
    @endauth
    
    



    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif



    <!--/ End Single News -->
                        
    <!-- Footer Area -->
    <footer id="footer" class="footer ">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>I am an IT leader with 25+ years of experience in Software Engineering areas. I have
                                extensive work experience in working through and leading Software development and
                                Product Development Life Cycle.....</p>
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="/"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Home</a></li>
                                        <li><a href="portfolio-details"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a></li>
                                        <li><a href="service"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Services</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our
                                                Cases</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="#Appointment"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Consuling</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Finance</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Testimonials</a></li>
                                        <li><a href="contact"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <ul class="time-sidual">
                                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Sunday <span>9.00-15.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>
