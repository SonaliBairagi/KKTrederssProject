@extends('website.layout.master')
@section('content')

<main>
    <!-- CONTACT US SECTION -->
    <section style="background-color: #002b2e; padding: 80px 0; color: #fff; font-family: 'Segoe UI', sans-serif;">
        <div class="text-center mb-15" style="padding: 40px 0;">
            <div class="d-flex justify-content-center align-items-center mb-2">
            </div>
        </div>

        <div class="container">
            <!-- Header -->
            <div class="text-center mb-5">
                <h2 style="font-size: 28px; font-weight: bold;">CONTACT US</h2>
                <p style="color: #edc999; font-style: italic; font-size: 18px;">
                    Any questions or remarks? <br>
                    Just write us a message!
                </p>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
            <div class="alert alert-success text-center" style="color: #002b2e; background-color:rgb(195, 238, 205); padding: 10px; border-radius: 5px;">
                {{ session('success') }}
            </div>
            @endif

            <!-- Form  -->
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
                    <input type="text" name="phone" class="form-control bg-transparent border border-1 border-light text-white" placeholder="Enter your phone number" required>
                </div>

                <div class="col-md-6">
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

                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control bg-transparent border border-1 border-light text-white" rows="4" placeholder="Enter a message" required></textarea>
                </div>
                <div class="col-12 text-left">
                    <button type="submit" class="btn" style="background-color: #edc999; padding: 10px 40px; font-weight: bold; color: #000;">SEND</button>
                </div>
            </form>


            <!-- Image with Contact Info -->
            <div class="mt-5 position-relative" style="background-color: #002b2e;">
                <img src="{{ asset('website/assets/images/about/transport.png') }}" alt="transport" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;padding-top: 44px;">

                <div class="row text-white text-center py-4" style="background-color: #063337;margin-left: 0px;
                          margin-right: 0px;">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="mb-2">
                            <i class="fas fa-phone" style="background-color: #edc999; color: #000; border-radius: 50%; padding: 12px; font-size: 18px;"></i>
                        </div>
                        <p class="mb-0">+91 8591910211</p>

                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="mb-2">
                            <i class="fas fa-map-marker-alt" style="background-color: #edc999; color: #000; border-radius: 50%; padding: 12px; font-size: 18px;"></i>
                        </div>
                        <p class="mb-0"> N K Property Realtors
                            Flat No.: TA-173</p>
                        <p>Kapaswadi Lokna Versova Link Road<br> Behind ZAF Club West D N Nagar</p>
                        <p>Andheri West, Mumbai. State: Maharashtra<br> PIN Code :- 400053.</p>

                    </div>
                    <div class="col-md-4">
                        <div class="mb-2">
                            <i class="fas fa-envelope" style="background-color: #edc999; color: #000; border-radius: 50%; padding: 12px; font-size: 18px;"></i>
                        </div>
                        <p class="mb-0">kktradersssupport@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15079.453898165877!2d72.85943414827737!3d19.11364436357627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83c05b7fc89%3A0xbe87eb057f3aafda!2sAndheri%2C%20Maharashtra%20400053!5e0!3m2!1sen!2sin!4v1744192458823!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>

@endsection


<!-- <style>
    select.form-control {
        width: 100%;
        /* Adjust width as needed */
        height: 200px;
        /* Set fixed height for dropdown */
        overflow-y: auto;
        /* Enable vertical scroll if the content exceeds height */
        max-height: 200px;
        /* Ensures no larger than 200px */
    }
</style> -->