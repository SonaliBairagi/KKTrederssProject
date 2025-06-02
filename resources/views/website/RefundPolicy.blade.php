@extends('website.layout.master')
@section('content')

<section style="background-color: #0f3a3a; padding: 60px 0;">


    <div class="text-center mb-15" style="padding: 30px 0;">
        <div class="d-flex justify-content-center align-items-center mb-2">
        </div>
    </div>

    <div class="container text-white">
        <div class="text-center mb-15" style="padding: 20px 0;">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
                <h5 class="m-0" style="color: white; line-height: 2.2;">Refund Policy</h5>
                <hr style="width: 100px; border-top: 2px solid #d8b885; margin: 0 20px;">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="refund-policy" style=" padding: 30px; border-radius: 12px; box-shadow: 0 0 10px rgba(2, 2, 2, 0.1); font-family: 'Segoe UI', sans-serif;">

            <p style="font-size: 16px; color: #333; line-height: 1.7; color:white;">
                At <strong>K K Traderss ,</strong> we ensure high-quality frozen products, but due to their nature, refunds are only applicable under specific conditions:
            </p>

            <br>
            <div class="sub____title">
                <span>Refund Eligibility</span> <br>
            </div>

            <div class="normal__text">
                <ul>
                    <li><strong>Damaged or Defective Products:</strong> Notify us within 24 hours with photographic proof for a refund or replacement.</li>
                    <li><strong>Incorrect Orders:</strong> Contact us within 24 hours if you received the wrong product.</li>
                </ul>
            </div>

            <br> <br>

            <div class="sub____title">
                <span>Non-Refundable Items</span>
            </div>
            <div class="normal__text">
                <ul>
                    <li>Opened, used, or improperly stored products.</li>
                    <li>Orders signed for with no visible damage.</li>
                </ul>
            </div>

            <br> <br>


            <div class="sub____title">
                <span>How to Request a Refund</span>
            </div>
            <div class="normal__text">
                <ul>
                    <li>Contact us within 24 hours.</li>
                    <li>Provide your order number, details, and photos (if applicable).</li>
                </ul>
            </div>


            <br> <br>
            <div class="sub____title">
                <span>Shipping Costs</span>
            </div>
            <div class="normal__text">
                <p>
                    Shipping fees are non-refundable, and return shipping is the customer's responsibility unless the error was ours.
                </p>
            </div>
            <br> <br>
            <div class="sub____title">
                <span>Refund Method</span>
            </div>
            <div class="normal__text">
                <p>
                    Refunds will be issued to the original payment method.
                </p>
            </div>

            <p style="margin-top: 30px; font-size: 16px; font-weight: 500;">
                If you have questions, <a href="{{ route('contact') }}" style="color: white; text-decoration: underline;">contact us</a>. We're here to assist!
            </p>
        </div>
    </div>

</section>

@endsection