@extends('website.layout.master')
@section('content')

<!-- food-section -->
<section class="food__section see__pad" style="background-color: #16393d;padding-bottom: 140px;">
    <div class=" container content-container">
        <div class="text-center mb-5">
            <p style="color: #d8b885; font-style: italic; font-size: 16px; margin-bottom: 5px;padding-top: 44px;">
                Deliciously Frozen, Perfectly Fresh!
            </p>
            <h2 style="color: #ffffff; font-weight: 700; letter-spacing: 1px; font-size: 32px;">
                OUR PRODUCTS
            </h2>
        </div>

        <!-- card-1 -->

        <div class="row align-items-center mb-5" style="position: relative; top: 90px;">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <a href="{{ route('FrozenFries') }}" style="display: block; text-decoration: none;">
                    <div style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden;">

                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            01
                        </span>

                        <div style="position: relative; z-index: 2;">

                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                FROZEN FRENCH FRIES
                            </h5>


                            <p style="color: #ffffff; font-size: 16px;">
                                Our Frozen French Fries are the perfect side dish or snack for any occasion. Pre-cut and pre-fried for convenience, they cook up quickly to deliver a satisfying crunch on the outside and a soft, fluffy center on the inside.
                            </p>

                        </div>
                    </div>
                </a>
            </div>
            </a>
            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/sm-banner-11.png); height: 327px; width: 315px; background-size: cover; background-position: center; position: relative;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/sm-banner-11.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <!-- card-2-->
        <div class="row align-items-center mb-5" style="position: relative;left: -25px;top: 84px;">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center order-2 order-lg-1">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/sm-banner-10.png); height: 327px; width: 315px; background-size: cover; background-position: center; position: relative;left: 22px;top: 45px;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/sm-banner-10.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 order-1 order-lg-2 card2AndCard4">
                <a href="{{ route('FrozenParathas') }}" style="display: block; text-decoration: none;">
                    <div class="card2" style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden; padding-bottom: 83px;">
                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            02
                        </span>
                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                FROZEN PARATHAS
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;">
                                Enjoy the authentic taste of traditional Indian flatbreads with our Frozen Parathas — soft, flaky, and full of flavor.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- card-3 -->
        <div class="row align-items-center mb-5" style="position: relative; top: 77px;">

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <a href="{{ route('FrozenPotato') }}" style="display: block; text-decoration: none;">
                    <div style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden;">

                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            03
                        </span>


                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                Potato Specialties
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;">
                                The delicious world of Potato Specialties, where every bite brings you comfort, flavor, and satisfaction. Made from premium quality potatoes and crafted into a variety of tasty forms
                            </p>

                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/sm-banner-20.png); height: 327px; width: 315px; background-size: cover; background-position: center; position: relative;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/sm-banner-20.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>


        <!-- card-4-->
        <div class="row align-items-center mb-5" style="position: relative;left: -25px;top: 84px;">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center order-2 order-lg-1">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/sm-banner-21.png);height: 344px;width: 315px;background-size: cover;background-position: center;position: relative;left: 22px;top: -14px;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/sm-banner-21.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 order-1 order-lg-2 card2AndCard4">
                <a href="{{ route('hashBrown') }}" style="display: block; text-decoration: none;">
                    <div class="card2" style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden;padding-bottom: 83px;">
                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            04
                        </span>
                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                HASH BROWN
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;">
                                Our Hash Browns are the perfect breakfast side dish or snack. Made from freshly grated potatoes, they’re seasoned and cooked to perfection, offering a crunchy exterior and a soft, fluffy interior.
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- card-5 -->
        <div class="row align-items-center mb-5" style="position: relative; top: 77px;">

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <a href="{{ route('WebVeggieSpecialties') }}" style="display: block; text-decoration: none;">
                    <div style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden;">

                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            05
                        </span>


                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                Veggie Specialties
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;">
                                A flavorful, plant-powered delight for burger lovers seeking a fresh, wholesome twist. Our Veggie Specialties Burger features a hearty, perfectly seasoned veggie patty made from the finest blend of vegetables, grains, and spices.
                            </p>

                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/burger.png); height: 327px; width: 315px; background-size: cover; background-position: center; position: relative;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/burger.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>


        <!-- card-6-->
        <div class="row align-items-center mb-5" style="position: relative;left: -25px;top: 84px;">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center order-2 order-lg-1">
                <div class="food__right__img" style="background-image: url(website/assets/images/resource/pizza.png);height: 344px;width: 315px;background-size: cover;background-position: center;position: relative;left: 22px;top: -14px;">
                    <div class="food__right__img_feature_image">
                        <img class="d-block d-lg-none" src="{{asset('website/assets/images/resource/pizza.png')}}" alt="" style="max-width: 100%;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 order-1 order-lg-2 card2AndCard4">
                <a href="{{ route('websiteBakedSnacks') }}" style="display: block; text-decoration: none;">
                    <div class="card2" style="background-color: #173D3C; border-radius: 0px; padding: 40px; position: relative; overflow: hidden;padding-bottom: 83px;">
                        <span style="position: absolute; top: 51px; left: 40px; font-size: 97px; font-weight: bold; color: rgba(255,255,255,0.05); z-index: 0;">
                            06
                        </span>
                        <div style="position: relative; z-index: 2;">
                            <h5 style="color: #d8b885; font-weight: bold; font-size: 24px; margin-bottom: 15px;">
                                BAKED SNACKS
                            </h5>
                            <p style="color: #ffffff; font-size: 16px;">
                                A universally loved dish featuring a crispy, golden-brown crust topped with a rich blend of savory tomato sauce, creamy melted cheese, and an endless variety of flavorful toppings.
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- food-section-end -->

<style>
    @media (max-width: 767.98px) {
        .card2AndCard4 {
            margin-left: 25px;

        }
    }
</style>


@endsection