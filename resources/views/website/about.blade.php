@extends('website.layout.master')
@section('content')

<section style="background-color: #0f3a3a; padding: 60px 0; padding-bottom: 140px;">

    <div class="text-center mb-15" style="padding: 30px 0;">
        <div class="d-flex justify-content-center align-items-center mb-2">
        </div>
    </div>

    <div class="container text-white">
        <div class="text-center mb-15" style="padding: 50px 0;">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
                <h5 class="m-0" style="color: white; line-height: 2.2;">Pioneers Journey</h5>
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
            </div>
        </div>
    </div>


    <!-- Founder  KANTILAL KANKRIYA Section -->
    <section class="honor-bg">
        <div class="container py-5">
            <div class="mb-4 text-start honor-section position-relative">
                <h6 style="font-weight: 600; color: #d8b885;">A life of love, wisdom, and lasting legacy.</h6>
                <h3 style="font-weight: 600; color: #fff; position: relative; z-index: 2;">
                    HONORING THE JOURNEY OF<br>
                    FOUNDER LATE <span style="color: #d8b885;">{{$PioneersJourneys->title1 }}</span>
                </h3>

                <!-- Quotation Mark Image -->
                <img src="{{ asset('website/assets/images/about/doublecots.png') }}"
                    alt="Quote"
                    class="quote-mark-img" style=" height: 45px; margin-left: 584px; ">
            </div>

            <div class=" row align-items-start">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="{{ asset('PioneersJourny/' . $PioneersJourneys->image1) }}" alt="Image"
                        alt="Founder Image"
                        class="img-fluid rounded shadow"
                        style="object-fit: cover;">
                </div>
                <div class="col-md-7">
                    <p class="custom-para">
                        {!!$PioneersJourneys->description1 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder NIKHIL SHAH. Tribute Section -->
    <section class="honor-bg-2">
        <div class="container py-5" style="position: relative; top: 88px;">
            <div class="row align-items-center">

                <div class="col-12 order-1 d-block d-md-none mb-3">
                    <div class="honor-section2">
                        <h6 style="font-weight: 600; color: #d8b885;">A life of love, wisdom, and lasting legacy.</h6>
                        <h3 style="font-weight: 600; color: #fff; text-shadow: 1px 1px 3px #000;">
                            HONORING THE JOURNEY OF<br>
                            <span style="color: #d8b885;">{{$PioneersJourneys->title2 }}</span>
                        </h3>
                    </div>
                </div>

                <div class="col-md-5 order-2 order-md-2 position-relative text-center mb-4 mb-md-0">
                    <img src="{{ asset('PioneersJourny/' . $PioneersJourneys->image2) }}"
                        alt="Founder Image"
                        class="img-fluid rounded shadow w-100"
                        style="max-height: 450px; object-fit: cover;">


                    <div class="honor-section2 d-none d-md-block">
                        <h6 style="font-weight: 600; color: #d8b885;">A life of love, wisdom, and lasting legacy.</h6>
                        <h3 style="font-weight: 600; color: #fff; text-shadow: 1px 1px 3px #000;">
                            HONORING THE JOURNEY OF<br>
                            <span style="color: #d8b885;">{{$PioneersJourneys->title2 }}.</span>
                        </h3>
                    </div>
                </div>

                <div class="col-md-7 order-3 order-md-1" style="position: relative; top: 41px;">
                    <!-- Quotation Mark Image -->
                    <img src="{{ asset('website/assets/images/about/doublecots.png') }}"
                        alt="Quote" class="quote-mark-img" style=" height: 45px;">

                    <p class="custom-para text-justify">
                        {!!$PioneersJourneys->description2 !!}
                    </p>

                    <!-- <p class="custom-para">
                        <em style="color: #fff;"><strong>He is gone, but never forgotten—forever in our hearts.</strong></em>
                    </p> -->
                </div>
            </div>
        </div>
    </section>
</section>

<style>
    .honor-section2 {
        position: absolute;
        top: -118px;
        left: 20px;
        text-align: left;
        width: 100%;
        padding-right: 20px;
        box-sizing: border-box;

    }

    @media (max-width: 576px) {
        .honor-section2 {
            position: relative !important;
            top: 0 !important;
            left: 0 !important;
            padding: 0 10px;
        }
    }
</style>

<style>
    .honor-bg-2 {
        height: 790px;
        background-image: url("{{ asset('website/assets/images/about/PioneersJourney1.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;

    }

    /* For all mobile sizes */
    @media (max-width: 767px) {
        .honor-bg-2 {
            height: 1650px !important;
        }
    }


    /* For iPads (portrait and landscape) */
    @media (min-width: 768px) and (max-width: 1024px) {
        .honor-bg-2 {
            height: 1140px;
        }

        .honor-section2 {
            top: -207px;
        }
    }
</style>

<!-- for  kantilal -->
<style>
    .custom-para {
        line-height: 1.8;
        text-align: justify;
        color: #ffffffcc;
        margin-bottom: 10px;
        /* adjust spacing here */
    }
</style>


<style>
    .honor-bg {
        background-image: url("{{ asset('website/assets/images/about/PioneersJourney0.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;
    }
</style>



@endsection