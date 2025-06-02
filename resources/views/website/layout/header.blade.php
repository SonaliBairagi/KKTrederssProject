<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>KKTraders</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{asset('website/assets/images/logo.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-vU7zBvV4D0XVZ9zJEOw0HqHgi+8qIlkZBIPn0eHc0qMTD2K8b/2nR63lLf/vT8lYw9uVqbsZDW3x7zD1vE1q5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Stylesheets -->
    <link href="{{asset('website/assets/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/global.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/timePicker.css')}}" rel="stylesheet">
    <link href="{{asset('website/assets/css/responsive.css')}}" rel="stylesheet">

</head>
<!-- page wrapper -->

<body>
    <div class="boxed_wrapper two">
        <!-- preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header" style="position: absolute; width: 100%; z-index: 1000;padding-top: 20px;
             padding-left: 90px;padding-right: 90px;">

            <div class="header-lower" style="background: rgba(65, 106, 111, 0.4);  backdrop-filter: blur(3px);    border-radius: 10px;  padding: 15px 30px;  height: 76px;">

                <div class="container-fluid px-0">
                    <div class="outer-box d-flex justify-content-between align-items-center" style="position: relative; top: -52px;">

                        <div class="logo-box">
                            <figure class="logo mb-0">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('website/assets/images/logo.png') }}" alt="Logo" style="height: 69px;width: 93px;position: relative;right: 68px;">
                                </a>
                            </figure>
                        </div>


                        <div class="menu-area d-flex align-items-center">
                            <div class="d-none d-md-block">
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix mb-0">
                                            <li><a href="/">Home</a></li>

                                            <li class="dropdown">
                                                <a href="{{ route('about') }}">About Us</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">Pioneers Journey</a></li>
                                                    <li><a href="{{ route('about_compyJourney') }}">Company’s Journey</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="{{ route('OurProduct') }}">Our Products</a>
                                                <ul>
                                                    <li><a href="{{ route('FrozenFries') }}">Frozen Fries</a></li>
                                                    <li><a href="{{ route('FrozenParathas') }}">Frozen Paratha</a></li>
                                                    <li><a href="{{ route('FrozenPotato') }}">Frozen Potato Specialities</a></li>
                                                    <li><a href="{{route('hashBrown')}}">Hash Brown</a></li>

                                                    <li><a href="{{route('WebVeggieSpecialties')}}">Veggie Specialities</a></li>
                                                    <li><a href="{{route('websiteBakedSnacks')}}">Baked Snacks</a></li>

                                                </ul>
                                            </li>


                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>


                            <div class="mobile-nav-toggler d-md-none ms-3">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                        </div>


                        <div class="header__right d-none d-md-block">
                            <a href="#" class="side-nav-open side-nav-opener">
                                <img src="{{ asset('website/assets/images/icons/bar.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="sticky-header" style="background: #416A6F80;">
                <div class="container">
                    <div class="outer-box d-flex justify-content-between align-items-center py-2">
                        <div class="logo-box">
                            <figure class="logo mb-0">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('website/assets/images/logo.png') }}" alt="Logo" style="max-height: 100px;position: relative;right: 98px;">
                                </a>
                            </figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!-- Menu will be loaded by JS if needed -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('website/assets/images/logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>

                        <li> N K Property Realtors, Koparwadi</li>
                        <li> Luhar Wasti, Link Road, Andheri,</li>
                        <li> Mumbai Suburban, Maharashtra, 400053</li>
                        <li><a href="tel:+918329150326">+91 8329150326</a></li>
                        <li><a href="tel:+918329199913">+91 8329199913</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">

                        <li><a href="https://www.facebook.com/kktraderss09"><span class="fab fa-facebook-square"></span></a></li>

                        <li><a href="https://www.instagram.com/kktraderss09/"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/khhushboo-nikhil-shah-6a3470147/"><span class="fab fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- hidden-sidebar -->
        <section class="hidden-sidebar side-navigation two">
            <span class="close-button side-navigation-close-btn icofont-close"></span>

            <div class="sidebar-content">
                <div class="nav-logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="" title="">
                    </a>
                </div>
            </div>

            <div class="sidebar-text">
                <h4>About Us</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem.</p>
            </div>

            <div class="sidebar-from">
                <h4>SEND AN ENQUIRY</h4>

                {{-- Success Message --}}
                @if(session('success'))
                <div class="alert alert-success text-center" style="color: #002b2e; background-color:rgb(195, 238, 205); padding: 10px; border-radius: 5px;">
                    {{ session('success') }}
                </div>
                @endif

                <!-- <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="row g-4" style="max-width: 900px; margin: auto;"> -->
                <form id="contact-form" action="{{ route('contactForm.send') }}" method="POST" class="row g-4" style="max-width: 900px; margin: auto;">

                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <input type="text" name="name" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter your name" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <input type="email" name="email" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter a valid email address" required>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <input type="text" name="phone" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter your phone number" required>
                    </div>

                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <select name="country" class="form-control bg-transparent border border-1 border-light text-white" required>
                            <option value="" disabled selected>Select your country</option>
                            <option value="US">United States</option>
                            <option value="UK">United Kingdom</option>
                            <option value="CA">Canada</option>
                            <option value="AU">Australia</option>
                            <option value="IN">India</option>
                            <option value="DE">Germany</option>
                            <option value="FR">France</option>
                            <option value="CN">China</option>
                            <option value="JP">Japan</option>
                            <option value="BR">Brazil</option>
                            <option value="ZA">South Africa</option>
                        </select>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <label class="form-label">Choose a Country</label>
                        <input list="countries" name="country" class="form-control bg-transparent border border-1 border-light text-white" required>
                        <datalist id="countries">
                            <option value="United States">
                            <option value="United Kingdom">
                            <option value="Canada">
                            <option value="Australia">
                            <option value="India">
                            <option value="Germany">
                            <option value="France">
                            <option value="China">
                            <option value="Japan">
                            <option value="Brazil">
                            <option value="South Africa">
                        </datalist>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group p-0">
                        <textarea name="message" class="form-control bg-transparent border border-1 border-light text-white" rows="4" placeholder="Enter a message" required></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn p-0">
                        <div class="submit more__button button__three">
                            <button type="submit" class="btn" style="background-color: #edc999; padding: 10px 40px; font-weight: bold; color: #000;">SEND</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="sidebar-social-network">
                <div class="title__social">
                    <h6>Social Network:</h6>
                </div>
                <div class="sidebar__media">
                    <ul class="social____media">
                        <li class="sidebar__media__icon"><a href="https://www.facebook.com/kktraderss09"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="sidebar__media__icon"><a href="https://www.linkedin.com/in/khhushboo-nikhil-shah-6a3470147/"><i class="fab fa-linkedin"></i></a></li>
                        <li class="sidebar__media__icon"><a href="https://www.instagram.com/kktraderss09/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- hidden-sidebar end -->
        <style>
            .main-header {
                background: transparent;
                padding-top: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }

            .header-lower {
                background: rgba(65, 106, 111, 0.5);
                /* semi-transparent */
                backdrop-filter: blur(8px);
                border-radius: 10px;
                padding: 15px 30px;
            }

            .outer-box {
                gap: 30px;
            }

            .navigation>li>a {
                color: #fff;
                font-weight: 500;
                padding: 10px 18px;
                transition: all 0.3s ease;
            }

            .navigation>li>a:hover,
            .navigation>li.active>a {
                color: #b18b5e;
            }

            /* Sticky Header */
            .sticky-header {
                background: rgba(0, 0, 0, 0.75);
                backdrop-filter: blur(5px);
                padding: 10px 30px;
                border-radius: 10px;
            }

            /* Mobile Adjustment */
            @media (max-width: 768px) {
                .main-header {
                    padding-left: 15px;
                    padding-right: 15px;
                }

                .header-lower {
                    padding: 10px 20px;
                }

                .main-header .logo-box {
                    max-width: 50%;
                }
            }


            @media (max-width: 996px) {
                .main-header {
                    padding: 10px 15px !important;
                }

                .header-lower {
                    height: auto !important;
                    padding: 10px 15px !important;
                    border-radius: 0 !important;
                }

                .outer-box {
                    flex-direction: row;
                    align-items: center;
                    gap: 0;
                }

                .main-header .logo-box {
                    max-width: 120px;
                    width: 100%;
                    padding: 10px 0;
                }

                .main-header .logo-box img {
                    /* width: 100%;
                    height: auto;
                    position: static; */
                    top: 44px;
                    left: -27px;
                }

                .menu-area {
                    flex-grow: 1;
                    justify-content: end;
                }

                .main-header .main-menu {
                    display: none !important;
                }

                .main-header .mobile-nav-toggler {
                    display: block !important;
                    cursor: pointer;
                    top: 42px;
                }

                .header__right {
                    display: none !important;
                }

                .sticky-header {
                    padding: 8px 15px !important;
                    border-radius: 0 !important;
                }
            }
        </style>