<footer style="background-color: #0c1c1d; color: #f5f5f5; padding: 40px 0; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row align-items-center text-center text-md-start mb-4 g-3">


            <div class="col-12 col-md-3">
                <img src="{{ asset('website/assets/images/logo.png') }}"
                    alt="KKK Traderss Logo"
                    class="img-fluid logo-mobile-adjust"
                    style="width: 144px; height: 114px; top: 66px; position: relative;">
            </div>



            <div class="col-12 col-md-6">
                <ul class="list-unstyled d-flex flex-wrap justify-content-start gap-4 mb-0 responsive-ul">
                    <li><a href="/" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{route('about')}}" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="{{route('OurProduct')}}" class="text-white text-decoration-none">Our Products</a></li>
                    <li><a href="{{route('contact')}}" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>


            <div class="col-12 col-md-3">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-end gap-3">

                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/kktraderss09" class="text-white"><i class="fab fa-facebook-f"></i></a>

                        <a href="https://www.linkedin.com/in/khhushboo-nikhil-shah-6a3470147/" class="text-white" target="_blank"><i class="fab fa-linkedin"></i>
                        </a>

                        <a href="https://www.instagram.com/kktraderss09/" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 d-none d-md-block" style="border-top: 2px solid #ccc;width: 90%;/* margin-top: -28px; */top: -18px;position: relative;margin-left: 288px;">


        <div class="row">
            <div class="col text-center">
                <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-4 mb-0 responsive-ul">
                    <li><a href="{{ route('PrivacyPolicy') }}" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="{{ route('TermsAndCondition') }}" class="text-white text-decoration-none">Terms & Conditions</a></li>
                    <li><a href="{{ route('RefundPolicy') }}" class="text-white text-decoration-none">Refund Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- main-footer end -->
<!-- Floating Buttons -->
<div class="floating-buttons">

    <a href="https://wa.me/918591910211" target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">
        <img src="{{ asset('website/assets/images/resource/whatsappps.png') }}" alt="WhatsApp" />
    </a>

    <!-- <a href="{{ asset('website/assets/files/brochure.pdf') }}" target="_blank" class="brochure-btn">
        <img src="{{ asset('website/assets/images/resource/download-button.png') }}" alt="Download Brochure">
    </a> -->
</div>

</div>

</div>


<!-- jequery plugins -->
<script src="{{asset('website/assets/js/jquery.js')}}"></script>
<script src="{{asset('website/assets/js/popper.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl.js')}}"></script>
<script src="{{asset('website/assets/js/timePicker.js')}}"></script>
<script src="{{asset('website/assets/js/wow.js')}}"></script>
<script src="{{asset('website/assets/js/validation.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('website/assets/js/appear.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('website/assets/js/scrollbar.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('website/assets/js/nav-tool.js')}}"></script>
<script src="{{asset('website/assets/js/parallax-scroll.js')}}"></script>
<script src="{{asset('website/assets/js/swiper-bundle.min.js')}}"></script>

<!-- main-js -->
<script src="{{asset('website/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

</html>


<style>
    /* for ul tag  */
    .responsive-ul {
        padding-right: 152px;
    }

    @media (max-width: 767.98px) {
        .responsive-ul {
            padding-right: 0 !important;
            justify-content: center !important;
        }


    }

    @media (max-width: 767.98px) {
        .logo-mobile-adjust {
            top: -14px !important;
        }
    }
</style>

<style>
    .floating-buttons {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 15px;
    }

    .whatsapp-float {
        padding: 12px;
        border-radius: 50%;
        animation: bounce 2s infinite;
        transition: transform 0.3s;
        background-color: #25d366;
        display: inline-block;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-float img {
        width: 40px;
        height: 40px;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    .brochure-btn {
        width: 60px;
        height: 40px;
        padding: 0;
        background: none;
        border-radius: 50%;
        box-shadow: none;
        transition: transform 0.3s;
    }

    .brochure-btn img {
        width: 100%;
        height: auto;
    }

    .brochure-btn:hover {
        transform: scale(1.1);
    }

    @media (max-width: 480px) {
        .floating-buttons {
            bottom: 20px;
            right: 15px;
            gap: 10px;
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }

        .whatsapp-float {
            padding: 8px;
        }

        .brochure-btn img {
            width: 51px;
            height: 51px;
            margin-left: 10px;
        }
    }
</style>