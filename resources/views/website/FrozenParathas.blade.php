@extends('website.layout.master')
@section('content')

<!-- food-section -->
<section class="food__section see__pad" style="background-color: #16393d; padding-bottom: 300px;">
    <div class="text-center mb-5">
        <p style="color: #d8b885; font-style: italic; font-size: 16px; margin-bottom: 5px;padding-top: 44px;">
            Deliciously Frozen, Perfectly Fresh!
        </p>
        <h2 style="color: #ffffff; font-weight: 700; letter-spacing: 1px; font-size: 32px;">
            OUR PRODUCTS
        </h2>
    </div>

    <div class="container content-container">

        @foreach($FrozenParathaProducts as $index => $FrozenParathaProduct)
        @php
        $isEven = $index % 2 === 0;
        $positionTop = $isEven ? '173px' : '99px';
        $imgTop = $isEven ? '176px' : '100px';
        $imgShift = $isEven ? '-94px' : '42px';
        $imgWidth = $isEven ? '412px' : '463px';
        $imgHeight = $isEven ? '327px' : '350px';
        $boxMargin = $isEven ? '84px' : '-26px';
        $img = asset('Parathaproducts/' . $FrozenParathaProduct->product_img);
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
                            {{ strtoupper($FrozenParathaProduct->product_name) }}
                        </h5>
                        <p style="color: #ffffff; font-size: 16px;text-align: justify;">
                            {!! $FrozenParathaProduct->product_description !!}
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
                            {{ strtoupper($FrozenParathaProduct->product_name) }}
                        </h5>
                        <p style="color: #ffffff; font-size: 16px; text-align: justify;">
                            {!! $FrozenParathaProduct->product_description !!}
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection