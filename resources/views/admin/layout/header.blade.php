<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>K K - Traders</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('admin/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('admin/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <!-- <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">

                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('website/assets/images/logo.png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">KKTREDDERS</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Home </a>
                    </div>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Home Carousal</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Home About Us</a>

                    <a href="{{route('admin.Home_food_menu.index')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Home Food Menu</a>

                    <a href="{{route('admin.Our_Product.index')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Home Our Product</a>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>About</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item">Pioneers Journey</a>
                            <a href="#" class="dropdown-item">Company’s Journey</a>
                        </div>
                    </div>


                    <a href="{{route('admin.frozefries')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Frozen Frize</a>

                    <a href="{{route('admin.frozenparatha')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Frozen Paratha</a>

                    <a href="{{route('admin.frozenPotato.index')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Frozen Potato Specialities</a>

                    <a href="{{route('admin.Hash_Brown.index')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Hash Brown</a>

                    <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Contact</a>


                </div>
            </nav>
        </div> -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('website/assets/images/logo.png') }}" alt="Logo" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">KKTRADERS</h6>
                        <span>Admin</span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>

                    <!-- Home Sections -->


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-home me-2"></i>Home Sections
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.Home_carousal.index') }}" class="dropdown-item"><i class="fa fa-images me-2"></i>Home Carousel</a>
                            <a href="{{ route('admin.Home_about_us.index') }}" class="dropdown-item"><i class="fa fa-info-circle me-2"></i>Home About Us</a>
                            <a href="{{ route('admin.Home_food_menu.index') }}" class="dropdown-item"><i class="fa fa-utensils me-2"></i>Home Food Menu</a>
                            <a href="{{ route('admin.Our_Product.index') }}" class="dropdown-item"><i class="fa fa-boxes me-2"></i>Home Our Product</a>
                        </div>
                    </div>

                    <!-- About Section -->

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-building me-2"></i>About
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.Pioneers_Journey.index') }}" class="dropdown-item"><i class="fa fa-user-friends me-2"></i>Pioneers Journey </a>
                            <a href="{{ route('admin.CompanyJourney.index') }}" class="dropdown-item"><i class="fa fa-road me-2"></i>Company’s Journey</a>
                        </div>
                    </div>


                    <!-- Product List Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-store me-2"></i>Product List
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.frozefries') }}" class="dropdown-item">
                                <i class="fa fa-fish me-2"></i>Frozen Fries
                            </a>
                            <a href="{{ route('admin.frozenparatha') }}" class="dropdown-item">
                                <i class="fa fa-bread-slice me-2"></i>Frozen Paratha
                            </a>
                            <a href="{{ route('admin.frozenPotato.index') }}" class="dropdown-item">
                                <i class="fa fa-seedling me-2"></i>Potato Specialities
                            </a>
                            <a href="{{ route('admin.Hash_Brown.index') }}" class="dropdown-item">
                                <i class="fa fa-hamburger me-2"></i>Hash Brown
                            </a>

                            <a href="{{ route('admin.Veggie_specialties.index') }}" class="dropdown-item">
                                <i class="fa fa-hamburger me-2"></i>Veggie Specialties
                            </a>
                            <a href="{{ route('admin.bakedSnacks.index') }}" class="dropdown-item">
                                <i class="fa fa-hamburger me-2"></i>Baked Snacks
                            </a>
                        </div>
                    </div>


                    <!-- Contact -->
                    <a href="{{ route('admin.contactsForm.index') }}" class="nav-item nav-link">
                        <i class="fa fa-phone-alt me-2"></i>Contact
                    </a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('website/assets/images/about/kantilal.png')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"> KKTredders</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                    </div>
                </div>
            </nav>
            <!-- Navbar End -->