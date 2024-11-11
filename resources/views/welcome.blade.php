@include('layouts.header')

<style>
    /* Fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Slide-in from the bottom animation */
    @keyframes slideInUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Apply animation classes */
    .fade-in {
        animation: fadeIn 1s forwards;
    }

    .slide-in-up {
        animation: slideInUp 1s forwards;
    }
</style>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #202940 !important;">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ url('/') }}">XureBuilt Connect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#">Explore Technicians</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://xurebuilt.com/">Our Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Sales</a></li>
                </ul>

                <!-- Sign Up and Login buttons -->
                <div class="d-flex ms-lg-3">
                    <!-- Sign Up Button -->
                    <a href="{{ route('register') }}" class="btn btn-outline-light me-2">Sign Up</a>
                    <!-- Login Button -->
                    <a href="{{ url('/login') }}" class="btn btn-success">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="py-5" style="background-color: #202940 !important;">
        <div class="container px-5">
            <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2 fade-in">Connect with Skilled Technicians In Seconds</h1>
                                    <p class="lead text-white-50 mb-4 slide-in-up">Easily hire trusted professionals for your construction projects, all in one place with a single click.</p>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="#services">Find Technicians</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="#about">How It Works</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2 fade-in">Efficiently Connecting Technicians and Clients</h1>
                                    <p class="lead text-white-50 mb-4 slide-in-up">Our platform makes it easy for technicians to get hired and for clients to find the best professionals for their projects.</p>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="#features">Find Technicians</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="">How It Works</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2 fade-in">Utilise Our Seamless Payment System</h1>
                                    <p class="lead text-white-50 mb-4 slide-in-up">Secure, easy, and efficient payments for completed work, ensuring satisfaction for both clients and technicians.</p>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="#features">Start Now</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="">Learn About Payments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2 fade-in">Why Settle for Less? Shop at Our Store!</h1>
                                    <p class="lead text-white-50 mb-4 slide-in-up">
                                        Shop conveniently and get high-quality supplies delivered directly to your site in just few hours.
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="https://xurebuilt.com">Shop Now</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="#how-it-works">How It Works</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2 fade-in">Rent High-Quality Construction Machines</h1>
                                    <p class="lead text-white-50 mb-4 slide-in-up">Access a wide range of construction machines for your projects. Quick rentals, reliable service, and affordable prices.</p>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="https://xurebuilt.com/machines-now/">Browse Machines</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="">How It Works</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#headerCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#headerCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>
    </header>

    <!-- Features section-->
    <!-- Features section with side-by-side graphics -->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <!-- Graphic/Feature 1 -->
                <div class="col-md-6 mb-5">
                    <div class="d-flex">
                        <div class="icon-container bg-success text-white rounded-3 me-3">
                            <i class="bi bi-people"></i>
                        </div>
                        <div>
                            <h2 class="h4 fw-bolder text-success">Find Skilled Technicians</h2>
                            <p>Browse a vast network of qualified professionals for all your construction needs, from plumbers and electricians to builders and carpenters.</p>
                            <a class="text-decoration-none text-success" href="#!">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Graphic/Feature 2 -->
                <div class="col-md-6 mb-5">
                    <div class="d-flex">
                        <div class="icon-container bg-success text-white rounded-3 me-3">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <div>
                            <h2 class="h4 fw-bolder text-success">Post Your Projects</h2>
                            <p>Share your project details and get matched with the best technicians ready to bring your vision to life, on time and within budget.</p>
                            <a class="text-decoration-none text-success" href="#!">
                                Post a Project
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Graphic/Feature 3 -->
                <div class="col-md-6 mb-5">
                    <div class="d-flex">
                        <div class="icon-container bg-success text-white rounded-3 me-3">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <div>
                            <h2 class="h4 fw-bolder text-success">Secure and Easy Payments</h2>
                            <p>Effortlessly manage and track payments with our secure, integrated system that ensures a smooth experience for both clients and technicians.</p>
                            <a class="text-decoration-none text-success" href="#!">
                                Payment Options
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Graphic/Feature 4 -->
                <div class="col-md-6 mb-5">
                    <div class="d-flex">
                        <div class="icon-container bg-success text-white rounded-3 me-3">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div>
                            <h2 class="h4 fw-bolder text-success">Trust and Safety</h2>
                            <p>Our platform prioritizes the safety and trust of all users, providing tools and support to ensure secure interactions and reliable outcomes.</p>
                            <a class="text-decoration-none text-success" href="#!">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-success">Choose the Plan that Fits Your Needs</h2>
                <p class="lead mb-0">Flexible, affordable plans for technicians and clients alike.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- Pricing card free-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">Starter</div>
                            <div class="mb-3">
                                <span class="display-6 fw-bold">Ugx 0</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>1 user</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    10 job applications/month
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Access to public job listings
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Community support
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Priority client connections
                                </li>
                                <li class="mb-2 text-muted">
                                    <i class="bi bi-x"></i>
                                    Advanced payment options
                                </li>
                            </ul>
                            <div class="d-grid">
                                <a class="btn btn-outline-success" href="">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card pro-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold">
                                <i class="bi bi-star-fill text-warning"></i>
                                Professional
                            </div>
                            <div class="mb-3">
                                <span class="display-6 fw-bold">Ugx 10000</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>5 job applications/month</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Unlimited job listings
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Access to priority job listings
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Dedicated client support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Advanced payment management
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Invoice and payment tracking
                                </li>
                            </ul>
                            <div class="d-grid">
                                <a class="btn btn-success" href="">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing card enterprise-->
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                            <div class="mb-3">
                                <span class="display-6 fw-bold">Ugx 50000</span>
                                <span class="text-muted">/ mo.</span>
                            </div>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    <strong>Unlimited applications</strong>
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Priority client matching
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Access to exclusive job postings
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Dedicated 24/7 support
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Custom payment solutions
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-check text-primary"></i>
                                    Detailed performance analytics
                                </li>
                            </ul>
                            <div class="d-grid">
                                <a class="btn btn-outline-success" href="">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder text-success">Customer testimonials</h2>
                <p class="lead mb-0">Our customers love working with us</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-success fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-success fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="container px-5">
            <div class="row">
                <!-- Logo and Info -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3 text-success">Xurebuilt Connect</h5>
                    <p class="mb-3">Connecting technicians with clients for hassle-free, professional construction services. Find trusted experts and manage your projects with ease.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-house-door"></i> Plot 1 Lugard Street, Fortportal Tourism City, Uganda</li>
                        <li><i class="bi bi-phone"></i> (+256) 772240510</li>
                        <li><i class="bi bi-envelope"></i> info@xurebuilt.com</li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://xurebuilt.com/" class="text-decoration-none text-success">Our Store</a></li>
                        <li><a href="#features" class="text-decoration-none text-success">Features</a></li>
                        <li><a href="#pricing" class="text-decoration-none text-success">Pricing</a></li>
                        <li><a href="https://xurebuilt.com/about-us/" class="text-decoration-none text-success">About Us</a></li>
                        <li><a href="https://xurebuilt.com/contact-us/" class="text-decoration-none text-success">Contact</a></li>
                        <li><a href="#faq" class="text-decoration-none text-success">FAQ</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li class="me-3">
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-facebook text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-twitter text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-instagram text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-linkedin text-success" style="font-size: 1.5rem;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-4">
                <p class="m-0 text-muted">Copyright &copy; Xurebuilt 2024</p>
            </div>
        </div>
    </footer>

    @include('layouts.footer');
</body>

</html>