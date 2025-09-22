
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/aduca-demo/aduca/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 11:17:11 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Matheducatorz -  Online tution center</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            @foreach(App\Models\country::all() as $country)
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><a href="https://wa.me/{{ $country->whatsapp }}"> <img src="{{ asset('storage/app/public/country') }}/{{ $country->photo }}" height="10px" width="15px" /> <i class="la la-whatsapp"></i> {{ $country->whatsapp }}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-sign-in mr-1"></i><a href="{{ route('login') }}"> Login</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{ route('home') }}" class="logo"><img src="{{ asset('images/logo.png') }}" width="250px" alt="logo"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Search">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}"> <i class="la la-home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}"> <i class="la la-question-circle"></i> Who we are</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="la la-list"></i> Curriculam <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            @php
                                            $countries = App\Models\country::all();
                                            @endphp
                                            @foreach($countries as $country)
                                            <li><a href="{{ route('subjects',$country->id) }}">{{ $country->location->country }} <img src="{{ asset('storage/app/public/country') }}/{{ $country->photo }}" height="15px" /></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="la la-money"></i> Fee Structure <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            @php
                                            $countries = App\Models\country::all();
                                            @endphp
                                            @foreach($countries as $country)
                                            <li><a href="{{ route('pricing',$country->id) }}">  {{ $country->location->country }} <img src="{{ asset('storage/app/public/country') }}/{{ $country->photo }}" height="15px" /></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}"> <i class="la la-handshake-o"></i> Contact</a>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="nav-right-button">
                                <a href="{{ route('trail.book') }}" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> Free Trail </a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="{{ route('home') }}"> <i class="la la-home"></i> Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}"> <i class="la la-question-circle"></i> Who we are</a>
            </li>
            <li>
                <a href="#"> <i class="la la-list"></i> Curriculam </a>
                <ul class="sub-menu">
                    @php
                    $countries = App\Models\country::all();
                    @endphp
                    @foreach($countries as $country)
                    <li><a href="{{ route('subjects',$country->id) }}">{{ $country->location->country }} <img src="{{ asset('storage/app/public/country') }}/{{ $country->photo }}" height="15px" /></a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#"> <i class="la la-money"></i> Fee Structure </a>
                <ul class="sub-menu">
                    @php
                    $countries = App\Models\country::all();
                    @endphp
                    @foreach($countries as $country)
                    <li><a href="{{ route('pricing',$country->id) }}">  {{ $country->location->country }} <img src="{{ asset('storage/app/public/country') }}/{{ $country->photo }}" height="15px" /></a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('contact') }}"> <i class="la la-handshake-o"></i> Contact</a>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="course-grid.html">Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Development</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Apps</a></li>
                    <li><a href="#">Game Development</a></li>
                    <li><a href="#">Databases</a></li>
                    <li><a href="#">Programming Languages</a></li>
                    <li><a href="#">Software Testing</a></li>
                    <li><a href="#">Software Engineering</a></li>
                    <li><a href="#">E-Commerce</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">business</a>
                <ul class="sub-menu">
                    <li><a href="#">All Business</a></li>
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Entrepreneurship</a></li>
                    <li><a href="#">Strategy</a></li>
                    <li><a href="#">Real Estate</a></li>
                    <li><a href="#">Home Business</a></li>
                    <li><a href="#">Communications</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">IT & Software</a>
                <ul class="sub-menu">
                    <li><a href="#">All IT & Software</a></li>
                    <li><a href="#">IT Certification</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Network & Security</a></li>
                    <li><a href="#">Operating Systems</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Finance & Accounting</a>
                <ul class="sub-menu">
                    <li><a href="#"> All Finance & Accounting</a></li>
                    <li><a href="#">Accounting & Bookkeeping</a></li>
                    <li><a href="#">Cryptocurrency & Blockchain</a></li>
                    <li><a href="#">Economics</a></li>
                    <li><a href="#">Investing & Trading</a></li>
                    <li><a href="#">Other Finance & Economics</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">design</a>
                <ul class="sub-menu">
                    <li><a href="#">All Design</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Design Tools</a></li>
                    <li><a href="#">3D & Animation</a></li>
                    <li><a href="#">User Experience</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Personal Development</a>
                <ul class="sub-menu">
                    <li><a href="#">All Personal Development</a></li>
                    <li><a href="#">Personal Transformation</a></li>
                    <li><a href="#">Productivity</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Personal Finance</a></li>
                    <li><a href="#">Career Development</a></li>
                    <li><a href="#">Parenting & Relationships</a></li>
                    <li><a href="#">Happiness</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Marketing</a>
                <ul class="sub-menu">
                    <li><a href="#">All Marketing</a></li>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Video & Mobile Marketing</a></li>
                    <li><a href="#">Affiliate Marketing</a></li>
                    <li><a href="#">Growth Hacking</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Health & Fitness</a>
                <ul class="sub-menu">
                    <li><a href="#">All Health & Fitness</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Dieting</a></li>
                    <li><a href="#">Self Defense</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mental Health</a></li>
                    <li><a href="#">Yoga</a></li>
                    <li><a href="#">Dance</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">Photography</a>
                <ul class="sub-menu">
                    <li><a href="#">All Photography</a></li>
                    <li><a href="#">Digital Photography</a></li>
                    <li><a href="#">Photography Fundamentals</a></li>
                    <li><a href="#">Commercial Photography</a></li>
                    <li><a href="#">Video Design</a></li>
                    <li><a href="#">Photography Tools</a></li>
                    <li><a href="#">Other</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->
{{ $slot }}
<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}"  width="250px" alt="footer logo" class="footer__logo">
                    </a>
                    <ul class="generic-list-item pt-4">
                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                        <li>Melbourne, Australia, 105 South Park Avenue</li>
                    </ul>
                    <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">We are on</h3>
                    <ul class="social-icons social-icons-styled">
                        <li class="mr-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                        <li class="mr-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                        <li class="mr-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        <li class="mr-1"><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Company</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Become a Teacher</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Courses</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Hacking</a></li>
                        <li><a href="#">PHP Learning</a></li>
                        <li><a href="#">Spoken English</a></li>
                        <li><a href="#">Self-Driving Car</a></li>
                        <li><a href="#">Garbage Collectors</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Download App</h3>
                    <span class="section-divider section--divider"></span>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                        <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">English</option>
                                <option value="2">Deutsch</option>
                                <option value="3">Español</option>
                                <option value="4">Français</option>
                                <option value="5">Bahasa Indonesia</option>
                                <option value="6">Bangla</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">Nederlands</option>
                                <option value="10">Polski</option>
                                <option value="11">Português</option>
                                <option value="12">Română</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">Türkçe</option>
                                <option value="16">中文(简体)</option>
                                <option value="17">中文(繁體)</option>
                                <option value="17">Hindi</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<div class="tooltip_templates">
    <div id="tooltip_content_1">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Business Intelligence Analyst Course 2021</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_2">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">Ultimate Adobe Photoshop Training: From Beginner to Pro</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Complete WordPress Website Business Course</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_4">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Ultimate Drawing Course - Beginner to Advanced</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_5">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">By <a href="teacher-detail.html">Jose Portilla</a></p>
                <h5 class="card-title pb-1"><a href="course-details.html">The Complete Digital Marketing Course - 12 Courses in 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">Bestseller</h6>
                    <p class="text-success fs-14 font-weight-medium">Updated<span class="font-weight-bold pl-1">November 2020</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 total hours</li>
                    <li>All Levels</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">The skills you need to become a BI Analyst - Statistics, Database theory, SQL, Tableau – Everything is included</p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> Become an expert in Statistics, SQL, Tableau, and problem solving</li>
                    <li><i class="la la-check mr-1 text-black"></i> Boost your resume with in-demand skills</li>
                    <li><i class="la la-check mr-1 text-black"></i> Gather, organize, analyze and visualize data</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> Add to Cart</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->


<!-- template js files -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/waypoint.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/fancybox.js') }}"></script>
<script src="{{ asset('js/datedropper.min.js') }}"></script>
<script src="{{ asset('js/emojionearea.min.js') }}"></script>
<script src="{{ asset('js/tooltipster.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.lazy.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>