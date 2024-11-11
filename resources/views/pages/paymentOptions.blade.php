@include('layouts.header')

<style>
    /* Fade-in and slide-up animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 1s forwards;
    }
</style>

<body>
    <!-- Navbar -->
    @include('layouts.appBar')

    <!-- Page Header -->
    <header class="py-5 text-center text-white" style="background-color: #202940;">
        <h1 class="display-6 fw-bold fade-in">XureBuilt Connect Payment Methods</h1>
        <p class="lead text-white-50 fade-in">We have a range of secure and convenient payment options
            <br>
            available for you when making payments for goods and services
            <br> on XureBuilt Connect.
        </p>
    </header>

    <!-- Payment Options Section -->
    <section class="py-5 bg-light" id="payment-options">
        <div class="container px-5">
            <div class="text-center mb-5 wow animate__animated animate__fadeInDown">
                <h2 class="fw-bolder display-4 text-success">Our Payment Options</h2>
                <p class="lead mb-0">Choose the method that’s most convenient for you.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- MTN Mobile Money -->
                <div class="col-lg-4 mb-4 wow animate__animated animate__slideInLeft" data-wow-delay="0.2s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body d-flex flex-column align-items-center p-4">
                            <img src="{{ asset('assets/img/mtn-mobile-money-logo.png') }}" alt="MTN Mobile Money" class="img-fluid mb-3" style="max-height: 150px;">
                            <h5 class="card-title fw-bold">MTN Mobile Money</h5>
                            <p class="card-text">A fast, secure mobile payment option accessible for everyone, ensuring seamless transactions.</p>
                        </div>
                    </div>
                </div>

                <!-- Airtel Money -->
                <div class="col-lg-4 mb-4 wow animate__animated animate__zoomIn" data-wow-delay="0.4s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body d-flex flex-column align-items-center p-4">
                            <img src="{{ asset('assets/img/airtel-money-logo.jpg') }}" alt="Airtel Money" class="img-fluid mb-3" style="max-height: 150px;">
                            <h5 class="card-title fw-bold">Airtel Money</h5>
                            <p class="card-text">Fast, reliable transactions directly through Airtel’s trusted network for your convenience.</p>
                        </div>
                    </div>
                </div>

                <!-- Credit/Debit Card -->
                <div class="col-lg-4 mb-4 wow animate__animated animate__slideInRight" data-wow-delay="0.6s">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body d-flex flex-column align-items-center p-4">
                            <img src="{{ asset('assets/img/card-payment.jpg') }}" alt="Credit/Debit Card" class="img-fluid mb-3" style="max-height: 150px;">
                            <h5 class="card-title fw-bold">Credit/Debit Card</h5>
                            <p class="card-text">Securely complete your payment with card options supported by our encrypted gateway.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5 wow animate__animated animate__fadeInDown">
                <h2 class="fw-bolder display-4 text-success">Don't Get Stuck on the Way</h2>
                <p class="lead mb-0">Reach out to our support team for assistance with any issues or inquiries.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- General Inquiry Card -->
                <div class="col-lg-6 col-xl-4 mb-4 wow animate__animated animate__slideInUp" data-wow-delay="0.2s">
                    <div class="card h-100 mb-5 mb-xl-0 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <div class="small text-uppercase fw-bold text-muted">General Inquiries</div>
                            <p class="mt-3 mb-4">Have a question about our services or need assistance with an account? We're here to help.</p>
                            <div class="d-grid">
                                <a href="mailto:support@xurebuilt.com" class="btn btn-outline-primary rounded-pill">Contact Support</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Technical Support Card -->
                <div class="col-lg-6 col-xl-4 mb-4 wow animate__animated animate__slideInUp" data-wow-delay="0.4s">
                    <div class="card h-100 mb-5 mb-xl-0 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <div class="small text-uppercase fw-bold text-muted">Technical Support</div>
                            <p class="mt-3 mb-4">Encountering technical issues? Our team is ready to provide expert solutions to keep you up and running.</p>
                            <div class="d-grid">
                                <a href="mailto:support@xurebuilt.com" class="btn btn-primary rounded-pill">Get Technical Support</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Billing Support Card -->
                <div class="col-lg-6 col-xl-4 mb-4 wow animate__animated animate__slideInUp" data-wow-delay="0.6s">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <div class="small text-uppercase fw-bold text-muted">Billing Support</div>
                            <p class="mt-3 mb-4">Questions about billing or payments? Our support team can assist with any financial queries.</p>
                            <div class="d-grid">
                                <a href="mailto:support@xurebuilt.com" class="btn btn-outline-primary rounded-pill">Billing Assistance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="py-5" style="background-color: #f8f9fa;">
        <div class="container px-5">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-4">
                    <h5 class="fw-bold text-success">XureBuilt Connect</h5>
                    <p>Connecting technicians and clients for professional construction services. Easily find trusted experts for your projects.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-house-door"></i> Plot 1 Lugard Street, Fortportal Tourism City, Uganda</li>
                        <li><i class="bi bi-phone"></i> (+256) 772240510</li>
                        <li><i class="bi bi-envelope"></i> info@xurebuilt.com</li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <h5 class="fw-bold">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://xurebuilt.com/" class="text-decoration-none text-success">Our Store</a></li>
                        <li><a href="#features" class="text-decoration-none text-success">Features</a></li>
                        <li><a href="#pricing" class="text-decoration-none text-success">Pricing</a></li>
                        <li><a href="https://xurebuilt.com/about-us/" class="text-decoration-none text-success">About Us</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-md-4">
                    <h5 class="fw-bold">Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li class="me-3"><a href="#"><i class="bi bi-facebook text-success" style="font-size: 1.5rem;"></i></a></li>
                        <li class="me-3"><a href="#"><i class="bi bi-twitter text-success" style="font-size: 1.5rem;"></i></a></li>
                        <li class="me-3"><a href="#"><i class="bi bi-instagram text-success" style="font-size: 1.5rem;"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin text-success" style="font-size: 1.5rem;"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="m-0 text-muted">© XureBuilt 2024</p>
            </div>
        </div>
    </footer>

    @include('layouts.footer')
</body>

</html>