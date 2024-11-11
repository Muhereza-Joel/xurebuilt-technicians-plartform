<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #202940;">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ url('/') }}">XureBuilt Connect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li> -->
                <li class="nav-item"><a class="nav-link" href="{{ route('techniciansFinder') }}">Explore Technicians</a></li>
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