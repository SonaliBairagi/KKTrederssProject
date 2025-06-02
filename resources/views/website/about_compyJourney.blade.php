@extends('website.layout.master')
@section('content')


<!-- COMPANY'S JOURNEY SECTION -->
<section style="background-color: #0f3a3a; padding: 60px 0;">


    <div class="text-center mb-15" style="padding: 25px 0;">
        <div class="d-flex justify-content-center align-items-center mb-2">
        </div>
    </div>

    <div class="container text-white">
        <div class="text-center mb-15" style="padding: 50px 0;">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
                <h5 class="m-0" style="color: white; line-height: 2.2;">Company’s Journey</h5>
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
            </div>
        </div>

        <!-- Why Choose Section -->
        <div class="row align-items-center">
            <div class="col-md-7" style="top: -54px; position: relative;">
                <p class="mb-2" style="color: #d8b885;"><em>KK Traders</em></p>
                <h3 class="fw-bold mb-3">{{ $companyJourney->WhyChooseTitle }}</h3>

                <p style="text-align: justify;">
                    {!! $companyJourney->WhyChooseDescription !!}
                </p>
            </div>
            <div class="col-md-5">

                <img src="{{ asset('CompanyJourny/' . $companyJourney->whyChooseImage) }}" class="img-fluid rounded" alt="Why Choose Image">
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section style="background-color: #1c4647; padding: 60px 0;text-align: justify;">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4>OUR MISSION</h4>

                <p style="color: white;">
                    {!! $companyJourney->OurMission !!}
                </p>
            </div>
            <div class="col-md-6">
                <h4>OUR VISION</h4>


                <p style="color: white;">
                    {!! $companyJourney->OurVision !!}
                </p>

            </div>
        </div>
    </div>
</section>

<!-- THE SOUL OF KK TRADERS -->
<section style="background-color: #16393d; padding: 60px 0;">
    <div class="container text-white">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('CompanyJourny/' . $companyJourney->OurValuesImage) }}" alt="Our Values Image" class="img-fluid" style="height: 434px;width: 495px;">
            </div>
            <div class="col-md-6" style="position: relative;bottom: 25px;">
                <p style="color: #d8b885;"><em>Our Values</em></p>
                <h4>{{ $companyJourney->OurValuesTitle }}</h4>
                <p style="list-style: none; padding: 0; margin-top: 20px;">
                    {!! $companyJourney->OurValuesDescription !!}
                </p>
            </div>
        </div>

        <div class="text-center mt-5 d-flex justify-content-center gap-5">
            <div>
                <img src="{{asset('website/assets/images/about/Group.png')}}" style="position: relative;height: 250px; top: 90px; padding-bottom: 100px;">

            </div>
        </div>
    </div>
</section>


<!-- OUR SERVICES -->
<section style="background: linear-gradient(to right, #1c4647, #1e5355); padding: 80px 0;">
    <div class="container">

        <div class="row text-white text-center text-md-start">

            <!-- Column 1 - Header Content -->
            <div class="col-lg-3 col-md-6 mb-5 d-flex flex-column align-items-center justify-content-center text-center text-white">
                <p style="color: #d1ad77; font-style: italic; font-size: 20px; margin-bottom: 5px;">
                    Deliciously Frozen, Perfectly
                </p>
                <h2 style="font-weight: bold; font-size: 36px;">OUR SERVICES</h2>
                <div class="mt-4">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 70px; height: 70px; border: 1px solid #d1ad77; border-radius: 50%;">
                        <i class="fas fa-arrow-right" style="color: #d1ad77; font-size: 24px;"></i>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6 mb-5 d-flex flex-column align-items-center">
                <div class="mb-3">
                    <div style="border: 1px solid #d1ad77; border-radius: 50%; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{asset('website/assets/images/about/KKIcon01.png')}}" alt="reliable" style="height: 50px;">
                    </div>
                </div>
                <h6 class="fw-bold text-white text-center">{{ $companyJourney->OurServicetitle1 }}</h6>
                <p style="color: #d1d1d1;" class="px-3">
                    {!! $companyJourney->OurServiceDescription1 !!}
                </p>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6 mb-5 d-flex flex-column align-items-center">
                <div class="mb-3">
                    <div style="border: 1px solid #d1ad77; border-radius: 50%; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{asset('website/assets/images/about/KKIcon03.png')}}" alt="packaging" style="height: 50px;">
                    </div>
                </div>
                <h6 class="fw-bold text-white text-center">{{ $companyJourney->OurServicetitle2 }}</h6>
                <p style="color: #d1d1d1;" class="px-3">
                    {!! $companyJourney->OurServiceDescription2 !!}
                </p>
            </div>

            <!-- Column 4 -->
            <div class="col-lg-3 col-md-6 mb-5 d-flex flex-column align-items-center">
                <div class="mb-3">
                    <div style="border: 1px solid #d1ad77; border-radius: 50%; width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{asset('website/assets/images/about/KKIcon04.png')}}" alt="distribution" style="height: 45px;">
                    </div>
                </div>
                <h6 class="fw-bold text-white text-center">{{ $companyJourney->OurServicetitle3 }}</h6>
                <p style="color: #d1d1d1;" class="px-3">
                    {!! $companyJourney->OurServiceDescription3 !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM -->
<section style="background-color: #16393d; padding: 80px 0;">
    <div class="container" style="max-width: 850px;">
        <div class="text-center text-white mb-5">
            <p style="color: #d1ad77; font-style: italic; font-size: 18px;">Deliciously Frozen, Perfectly Fresh!</p>
            <h3 style="font-weight: bold;">REACH US?</h3>
        </div>
        <!-- Form -->

        {{-- Success Message --}}
        @if(session('success'))
        <div class="alert alert-success text-center" style="color: #002b2e; background-color:rgb(195, 238, 205); padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
        @endif

        <!-- <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="row g-4" style="max-width: 900px; margin: auto;"> -->
        <form id="contact-form" action="{{ route('contactForm.send') }}" method="POST" class="row g-4" style="max-width: 900px; margin: auto;">

            @csrf
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter your name" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter a valid email address" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone No.</label>
                <input type="text" name="phone" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter your phone number" style="padding-bottom: 28px;" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Choose a Country</label>
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
            </div>

            <div class="col-12">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control bg-transparent border border-1 border-light text-white" rows="4" placeholder="Enter a message" required></textarea>
            </div>
            <div class="col-12 text-left">
                <button type="submit" class="btn" style="background-color: #edc999; padding: 10px 40px; font-weight: bold; color: #000;">SEND</button>
            </div>
        </form>

    </div>
</section>



<!-- Extra Styling -->
<style>
    .custom-input {
        background-color: transparent;
        border: 1px solid #edc999;
        color: #fff;
        padding: 10px;
        border-radius: 0;
    }

    .custom-input::placeholder {
        color: #d1d1d1;
        font-size: 14px;
    }

    .custom-input:focus {
        box-shadow: none;
        border-color: #edc999;
        background-color: transparent;
        color: #fff;
    }
</style>

@endsection