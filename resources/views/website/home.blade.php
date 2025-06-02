@extends('website.layout.master')
@section('content')

<main class="main">
    <!-- banner-section -->
    <section class="banner-style-two p_relative">
        <div class="text-center mb-15"
            style="padding: 50px 0; background: url(website/assets/images/banner/navigation01.png) no-repeat center center; background-size: cover;">
        </div>

        <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
            <div class="slide-item"
                style="background: url(website/assets/images/banner/banner-02.png) no-repeat center center; background-size: cover; padding-top: 0; padding-bottom: 0; min-height: 674px;">
                <div class="image-layer"></div>

                <div class="container">
                    <div class="content-box" style="position: relative;top: 127px;">
                        <div class="sub____title">
                            <span>{{ $home_carousals->title1}}</span>
                        </div>
                        <h1 style="font-family:Oswald;">{{ $home_carousals->title2}} <br>
                            <p style="font-family:Oswald; font-size:46px;color:#d8b885;position: relative;top: 13px;">{{ $home_carousals->title3}}</p>
                        </h1>

                        <p style="font-family:Josefin Sans;top: 17px;">{!! $home_carousals->description !!}</p>
                   
                        {{-- here this image i want to show only on mobile view  the image is statically--}}
                     <div class="food__right__img_feature_image d-block d-lg-none">
                        <img src="{{ asset('website/assets/images/girls.png') }}" alt="About Us Image"
                            style="max-width: 100%; padding-top: 16px; padding-bottom: 0px;">
                     </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- about-us-two -->
    <section class=" about__us__two p_relative" style="background-color: #2A5A5F;position: relative;
                      margin-top: -83px; padding-bottom: 141px;">

        <!-- Top Right french Image -->
        <img src="{{asset('website/assets/images/banner/french2.png')}}" alt="Top Decoration"
            class="top-right-decor">

        <!-- Bottom Left burger Image -->
        <img src="{{asset('website/assets/images/banner/burger2.png')}}" alt="Bottom Decoration"
            class="bottom-left-decor">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 p_relative">

                    <div class="about__img__right__two p_absolute d-none d-lg-block">
                        <img
                            src="{{ asset('homeaboutus/' . $homeaboutus->image) }}"
                            alt="About Us Image"
                            style="position: relative; height: 550px; top: 267px; right: 93px; width: 556px;">
                    </div>


                    <div class="food__right__img_feature_image d-block d-lg-none">
                        <img
                            src="{{ asset('homeaboutus/' . $homeaboutus->image) }}"
                            alt="About Us Image"
                            style="max-width: 100%; padding-top: 16px; padding-bottom: 0px;">
                    </div>
                </div>


                <div class="col-lg-6 col-md-12 col-sm-12" style="position: relative; top: 109px;text-align: justify;">


                    <div class="title__section">
                        <div class="sub____title">
                            <span>{{ $homeaboutus->title1}}</span>
                        </div>
                        <div class="main____title">
                            <h1>{{ $homeaboutus->title2}}</h1>
                        </div>
                    </div>
                    <div class="normal__text">
                        <p>{!! $homeaboutus->description1 !!}
                        </p>
                    </div>
                    <br>
                    <div>
                        <span style="font-size: 18px;top: -1px;position: relative;">{{ $homeaboutus->title3}}</span>
                    </div>
                    <div class="normal__text">
                        <p>{!! $homeaboutus->description2 !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us-two end -->

    <!-- Countries Section -->
    <section class="country-section" style="background-color: #16393d; padding: 61px 0;">
        <div class="countriesSection">
            <h2 class="section-title">EXPORTING SMILES, IMPORTING JOY </h2>

            <div class="carousel-wrapper">
                <div class="carousel-track">
                    <!-- Repeat the entire flag list twice for smooth looping -->
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/netherland.jpg')}}" alt="Netherlands">
                        <p>Netherlands</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/finland.jpg')}}" alt="Finland">
                        <p>Finland</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/canada.jpg')}}" alt="Canada">
                        <p>Canada</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/germany.jpg')}}" alt="Germany">
                        <p>Germany</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/singapour.png')}}" alt="Singapore">
                        <p>Singapore</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/myanmar.png')}}" alt="Myanmar">
                        <p>Myanmar</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/australia.png')}}" alt="Australia">
                        <p>Australia</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/vitenam.png')}}" alt="Vietnam">
                        <p>Vietnam</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/india.jpg')}}" alt="India">
                        <p>India</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/pakistan.jpg')}}" alt="Pakistan">
                        <p>Pakistan</p>
                    </div>

                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/nepal.jpg')}}" alt="Nepal">
                        <p>Nepal</p>
                    </div>

                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/srilanka1.jpg')}}" alt="Sri Lanka">
                        <p>Sri Lanka</p>
                    </div>

                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/bangladesh.jpg')}}" alt="bangladesh">
                        <p>Bangladesh</p>
                    </div>


                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/bhutan.jpg')}}" alt="Bhutan">
                        <p>Bhutan</p>
                    </div>


                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/maldives.jpg')}}" alt="Maldives">
                        <p>Maldives</p>
                    </div>

                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/afghanistan.jpg')}}" alt="Afghanistan">
                        <p>Afghanistan</p>
                    </div>

                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/netherland.jpg')}}" alt="Netherlands">
                        <p>Netherlands</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/finland.jpg')}}" alt="Finland">
                        <p>Finland</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/canada.jpg')}}" alt="Canada">
                        <p>Canada</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/germany.jpg')}}" alt="Germany">
                        <p>Germany</p>
                    </div>
                    <div class="flag-box">
                        <img src="{{asset('website/assets/images/resource/singapour.png')}}" alt="Singapore">
                        <p>Singapore</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Countries Section end -->

    <!-- food-menu -->
    <section class="food__menu" style="background-color: #2A5A5F;">
        <div class="food-menu-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            @foreach($HomeFoodMenuProducts as $product)
            <div class="food-block-one two">
                <div class="inner-box">
                    <figure class="image-box">
                        <img src="{{ asset('HomeFoodProducts/' . $product->FoodMenuImage) }}" alt="Food Item">
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- food-menu end -->

    <!-- food-section -->
    <section class="food__section see__pad" style="background-color: #16393d; padding-bottom: 100px;">
        <div class="text-center mb-5">
            <p style="color: #d8b885; font-style: italic; font-size: 16px; margin-bottom: 5px;padding-top: 44px;">
                Deliciously Frozen, Perfectly Fresh!
            </p>
            <h2 style="color: #ffffff; font-weight: 700; letter-spacing: 1px; font-size: 32px;">
                OUR PRODUCTS
            </h2>
        </div>

        <div class="container content-container">

            @foreach($OurProducts as $index => $product)
            @php
            $isEven = $index % 2 === 0;
            $positionTop = $isEven ? '173px' : '99px';
            $imgTop = $isEven ? '176px' : '100px';
            $imgShift = $isEven ? '-94px' : '42px';
            $imgWidth = $isEven ? '412px' : '463px';
            $imgHeight = $isEven ? '327px' : '350px';
            $boxMargin = $isEven ? '84px' : '-26px';
            $img = asset('OurProduct/' . $product->Oproduct_img);
            @endphp

            <div class="row align-items-center mb-5" style="position: relative; top: {{ $isEven ? '-103px' : '-23px' }};">
                @if($isEven)
                <!-- Left Text | Right Image -->
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="hash-brown-box" style="background-color: #173D3C; padding: 40px; position: relative; overflow: hidden; top: {{ $positionTop }}; height: 369px; margin-left: {{ $boxMargin }};">
                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                {{ strtoupper($product->Oproduct_name) }}
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;text-align: justify;">
                                {!! $product->Oproduct_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <div class="food__right__img" style="background-image: url('{{ $img }}'); left: {{ $imgShift }}; height: {{ $imgHeight }}; width: {{ $imgWidth }}; background-size: cover; background-position: center; position: relative; top: {{ $imgTop }};">
                        <div class="food__right__img_feature_image">
                            <img class="d-block d-lg-none" src="{{ $img }}" alt="" style="max-width: 100%; position: relative; right: -66px;">
                        </div>
                    </div>
                </div>
                @else
                <!-- Left Image | Right Text -->
                <div class="col-lg-6 col-md-12 d-flex justify-content-center order-2 order-lg-1">
                    <div class="food__right__img" style="background-image: url('{{ $img }}'); left: {{ $imgShift }}; height: {{ $imgHeight }}; width: {{ $imgWidth }}; background-size: cover; background-position: center; position: relative; top: {{ $imgTop }};">
                        <div class="food__right__img_feature_imagess">
                            <img class="d-block d-lg-none" src="{{ $img }}" alt="" style="max-width: 100%; position: relative; left: -43px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 order-1 order-lg-2">
                    <div class="hash-brown-boxright" style="background-color: #173D3C; padding: 40px; position: relative; overflow: hidden; top: {{ $positionTop }}; margin-left: {{ $boxMargin }}; margin-right: 110px; height: 416px;">
                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                {{ strtoupper($product->Oproduct_name) }}
                            </h5>
                            <p style="color: #ffffff; font-size: 16px; text-align: justify;">
                                {!! $product->Oproduct_description !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </section>

    <!-- certification section -->
    <section class="food__section see__pad" style="background-color: #16393d;position: relative; margin-top: -7px;
         padding-bottom: 81px;">
        <div class="content-container text-center">

            <p style="color: #d8b885; font-style: italic; font-size: 16px; margin-bottom: 5px;padding-top: 108px;">
                Deliciously Frozen, Perfectly Fresh!
            </p>

            <h2 style="color: #ffffff; font-weight: 700; letter-spacing: 1px; font-size: 32px; margin-bottom: 40px;">
                CERTIFICATIONS
            </h2>

            <div class="row justify-content-center align-items-center">
                <div class="col-auto mb-3">
                    <img src="{{ asset('website/assets/images/resource/Group 55.png') }}" alt="FSSAI" class="img-fluid" style="max-height: 150px; margin-right: 10px;">
                </div>
                <div class="col-auto mb-3">
                    <img src="{{ asset('website/assets/images/resource/Group 56.png') }}" alt="APEDA" class="img-fluid" style="max-height: 150px;">
                </div>
            </div>
        </div>
    </section>
    <!-- certification section end-->
</main>

<!-- for food section -->
<style>
    @media (max-width: 767.98px) {

        .top-right-decor,
        .bottom-left-decor {
            display: none !important;
        }

        .card2 {
            margin-right: -26px;
            margin-left: 24px;


        }
    }
</style>

<!-- for countries  -->
<style>
    .carousel-wrapper {
        overflow: hidden;
        width: 100%;
        position: relative;
    }

    .carousel-track {
        display: flex;
        width: max-content;
        animation: scrollFlags 60s linear infinite;
    }

    /* Default styles */
    .flag-box {
        flex: 0 0 auto;
        width: 140px;
        text-align: center;
        padding: 8px;
        box-sizing: border-box;
    }


    /* Scrolling animation */
    @keyframes scrollFlags {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0%);
        }
    }


    /* Responsive adjustments */
    @media (max-width: 768px) {
        .flag-box {
            width: 100px;
            padding: 4px;
        }

        .flag-box img {
            max-height: 60px;
        }
    }

    @media (max-width: 480px) {
        .flag-box {
            width: 80px;
            padding: 2px;
        }

        .flag-box img {
            max-height: 50px;
        }
    }


    .countriesSection {
        width: 100%;
        /* max-width: 1200px; */
        margin: auto;
        text-align: center;
    }

    .section-title {
        color: #a7b8ba;
        font-size: 44px;
        margin-bottom: 91px;
        font-weight: 500;
        letter-spacing: 4px;
    }

    .flags-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .flag-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
        font-size: 14px;
        font-family: sans-serif;
    }

    .flag-box img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        margin-bottom: 10px;
    }

    @media (max-width: 771px) and (max-height: 859px) {
        .countriesSection {
            padding: 20px 10px;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .carousel-track {
            gap: 10px !important;
        }

        .flag-box {
            width: 80px !important;
            padding: 4px;
        }

        .flag-box img {
            width: 60px;
            height: 60px;
            margin-bottom: 5px;
        }

        .flag-box p {
            font-size: 12px;
            margin: 0;
        }
    }
</style>

@endsection