<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="description" content="" />

   <!-- Site Title -->
   <title>@yield('title', 'Abdullah Mohamed Bassiouni')</title>

   <!-- Place favicon.ico in the root directory -->
   <link rel="apple-touch-icon" href="{{asset('website/assets/img/favicon.png')}}" />
   <link rel="shortcut icon" type="image/png" href="{{asset('website/assets/img/favicon.png')}}" />

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('website/assets/css/animate.min.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/font-awesome-pro.min.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/flaticon_gerold.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/nice-select.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/backToTop.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.min.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/swiper.min.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/odometer-theme-default.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/magnific-popup.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/main.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/main-2.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/main-3.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/light-mode.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/meanmenu.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/responsive.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/responsive-2.css')}}" />
   <link rel="stylesheet" href="{{asset('website/assets/css/responsive-3.css')}}" />
</head>

<body>
   <!-- Preloader Area Start -->
   <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
         <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>

      <div class="preloader-heading">
         <div class="load-text">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
         </div>
      </div>
   </div>
   <!-- Preloader Area End -->

   <!-- start: Back To Top -->
   <div class="progress-wrap" id="scrollUp">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- end: Back To Top -->

   <!-- start: Header Area -->
   <header class="tj-header-area header-3 header-absolute">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
               <div class="logo-box">
                  <a href="/">
                     <img src="{{asset('website/assets/img/logo/logo.png')}}" alt="Logo" />
                  </a>
               </div>
               <div class="header-menu" id="headerMenu">
                <nav>
                    <ul>
                        <li class="has-dropdown {{ request()->is('/') ? 'current-menu-ancestor' : '' }}">
                            <a class="{{ request()->is('/') ? 'current-menu-item' : '' }}" href="/">Home</a>
                            {{-- <ul class="sub-menu">
                                <li class="has-dropdown {{ request()->is('index.html') ? 'current-menu-ancestor' : '' }}">
                                    <a href="index.html">Dark Mode</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home One</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Two</a>
                                        </li>
                                        <li class="{{ request()->is('index-3.html') ? 'current-menu-item' : '' }}">
                                            <a href="index-3.html">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="index-light.html">Light Mode</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index-light.html">Home One</a>
                                        </li>
                                        <li>
                                            <a href="index-2-light.html">Home Two</a>
                                        </li>
                                        <li>
                                            <a href="index-3-light.html">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- <li><a href="about.html">About</a></li> --}}
                        {{-- <li><a href="services.html">Services</a></li> --}}
                        <li class="{{ request()->is('portfolio') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('portfolio') }}">Portfolios</a>
                        </li>
                        {{-- <li class="has-dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="{{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>              
               </div>
               <div class="mobile-menu d-lg-none"></div>
               <div class="header-media d-none d-lg-inline-flex">
                    <ul class="ul-reset social-icons">
                        <li>
                        <a target="_blank" href="https://wa.me/+201095895224"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li>
                        <a target="_blank" href="https://www.linkedin.com/in/abdullah-mohamed-bassioun"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100005527908627&locale=ar_AR"><i class="fa-brands fa-github"></i></a>
                        </li>
                    </ul>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <header class="tj-header-area header-2 header-3 header-sticky sticky-out">
      <div class="container">
         <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
               <div class="logo-box">
                  <a href="/">
                     <img src="{{asset('website/assets/img/logo/logo.png')}}" alt="Logo" />
                  </a>
               </div>
               <div class="header-menu">
                <nav>
                    <ul>
                        <li class="has-dropdown {{ request()->is('/') ? 'current-menu-ancestor' : '' }}">
                            <a class="{{ request()->is('/') ? 'current-menu-item' : '' }}" href="/">Home</a>
                            {{-- <ul class="sub-menu">
                                <li class="has-dropdown {{ request()->is('index.html') ? 'current-menu-ancestor' : '' }}">
                                    <a href="index.html">Dark Mode</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home One</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home Two</a>
                                        </li>
                                        <li class="{{ request()->is('index-3.html') ? 'current-menu-item' : '' }}">
                                            <a href="index-3.html">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="index-light.html">Light Mode</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index-light.html">Home One</a>
                                        </li>
                                        <li>
                                            <a href="index-2-light.html">Home Two</a>
                                        </li>
                                        <li>
                                            <a href="index-3-light.html">Home Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- <li><a href="about.html">About</a></li> --}}
                        {{-- <li><a href="services.html">Services</a></li> --}}
                        <li class="{{ request()->is('portfolio') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('portfolio') }}">Portfolios</a>
                        </li>
                        {{-- <li class="has-dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="{{ request()->routeIs('contact') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
               </div>
               <div class="mobile-menu d-lg-none"></div>
               <div class="header-media d-none d-lg-inline-flex">
                  <ul class="ul-reset social-icons">
                     <li>
                        <a target="_blank" href="https://wa.me/+201095895224"><i class="fa-brands fa-whatsapp"></i></a>
                     </li>
                     <li>
                        <a target="_blank" href="https://www.linkedin.com/in/abdullah-mohamed-bassiouni/"><i class="fa-brands fa-linkedin-in"></i></a>
                     </li>
                     <li>
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100005527908627&locale=ar_AR"><i class="fa-brands fa-facebook"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="menu-bar d-lg-none">
                  <button>
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end: Header Area -->

   @yield('content')

   <!-- FOOTER AREA START -->
   <footer class="tj-footer-area style-3">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="header-media text-center">
                  <ul class="ul-reset social-icons">
                        <li>
                            <a target="_blank" href="https://wa.me/+201095895224"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/abdullah-mohamed-bassiouni/"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100005527908627&locale=ar_AR"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                  </ul>
               </div>
               <div class="footer-logo-box">
                  <a href="#"><img src="{{asset('website/assets/img/logo/logo.png')}}" alt="Logo" /></a>
               </div>
               <div class="footer-menu">
                  <nav>
                     <ul>
                        {{-- <li><a href="about.html">About</a></li> --}}
                        {{-- <li><a href="services.html">Services</a></li> --}}
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolios</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="copy-text">
                  <p>&copy; 2024 All rights reserved by <a href="#">Abdullah Mohamed Bassiouni</a></p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- FOOTER AREA END -->

   <!-- JS here -->
   <script src="{{asset('website/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('website/assets/js/nice-select.min.js')}}"></script>
   <script src="{{asset('website/assets/js/backToTop.js')}}"></script>
   <script src="{{asset('website/assets/js/appear.min.js')}}"></script>
   <script src="{{asset('website/assets/js/wow.min.js')}}"></script>
   <script src="{{asset('website/assets/js/gsap.min.js')}}"></script>
   <script src="{{asset('website/assets/js/ScrollTrigger.min.js')}}"></script>
   <script src="{{asset('website/assets/js/lenis.min.js')}}"></script>
   <script src="{{asset('website/assets/js/lightcase.js')}}"></script>
   <script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('website/assets/js/swiper.min.js')}}"></script>
   <script src="{{asset('website/assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset('website/assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('website/assets/js/odometer.min.js')}}"></script>
   <script src="{{asset('website/assets/js/magnific-popup.js')}}"></script>
   <script src="{{asset('website/assets/js/validate.min.js')}}"></script>
   <script src="{{asset('website/assets/js/meanmenu.js')}}"></script>
   <script src="{{asset('website/assets/js/main.js')}}"></script>
</body>

</html>