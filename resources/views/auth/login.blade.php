@include('layouts.header')

<body>
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.jpg')}}" class="img-fluid" alt="XureBuilt Logo" style="max-width: 150px;"></a>
                    </div>
                    
                    <div class="card-body">
                        <div class="text-center my-2">
                            <h5>Login To Your Account</h5>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="Enter your email">
                                <small class="form-text text-muted">Please enter the email associated with your XureBuilt account.</small>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password" placeholder="Enter your password">
                                <small class="form-text text-muted">Use a strong password with at least 8 characters, including uppercase, lowercase, numbers, and symbols.</small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">{{ __('Login') }}</button>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            @endif
                            <div class="text-center">
                                <a class="btn btn-link text-secondary" href="{{ route('register') }}">
                                    No account? {{ __('Register here') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@include('layouts.footer')