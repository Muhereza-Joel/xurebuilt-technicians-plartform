@include('layouts.header')

<body>
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.jpg')}}" class="img-fluid" alt="XureBuilt Logo" style="max-width: 150px;"></a>
                    </div>
                    <div class="card-body">
                        <div class="text-center my-2">
                            <h5>Create Your Account</h5>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Username Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Username') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your username">
                                <small class="form-text text-muted">Choose a unique username for your XureBuilt account.</small>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                                <small class="form-text text-muted">Please enter a valid email address.</small>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password">
                                <small class="form-text text-muted">Use a strong password with at least 8 characters, including uppercase, lowercase, numbers, and symbols.</small>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter your password">
                                <small class="form-text text-muted">Ensure both passwords match.</small>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                                    <a href="{{ route('login') }}" class="btn btn-link mt-2">{{ __('Go back to login') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@include('layouts.footer')