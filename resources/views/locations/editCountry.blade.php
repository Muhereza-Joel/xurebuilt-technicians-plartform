@include('layouts.dashboardHeader')

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.leftPane')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('layouts.topBar')

            <div class="container">
                <div class="p-2">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Display validation errors -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <div class="row mt-0 g-0 px-2 py-2">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Update Country Details</div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('countries.update', $country->id ) }}" method="POST" id="countryForm">
                                    @csrf 
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="code">Country Code</label>
                                        <input autocomplete="off" type="text" value="{{ old('code', $country->code) }}" class="form-control" id="code" name="code" placeholder="Enter Country Code">
                                        <small id="codeError" class="form-text text-danger d-none">Country code is required.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Country Name</label>
                                        <input autocomplete="off" type="text" value="{{ old('name', $country->name) }}" class="form-control" id="name" name="name" placeholder="Enter Country Name">
                                        <small id="nameError" class="form-text text-danger d-none">Country name is required.</small>
                                    </div>

                                    <div class="card-action p-2">
                                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                                        <a href="{{ route('countries.index') }}" class="btn btn-secondary btn-sm">Go To Countries</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>


    </div>
    @include('layouts.dashboardFooter')

    <script>
        $(document).ready(function() {
            // Form submission validation
            $('#countryForm').on('submit', function(event) {
                // Clear previous error messages
                $('.form-text.text-danger').addClass('d-none');

                let isValid = true;
                const code = $('#code').val().trim();
                const name = $('#name').val().trim();

                // Validate country code
                if (code === '') {
                    $('#codeError').removeClass('d-none');
                    $('#code').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#code').removeClass('is-invalid').addClass('is-valid');
                }

                // Validate country name
                if (name === '') {
                    $('#nameError').removeClass('d-none');
                    $('#name').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#name').removeClass('is-invalid').addClass('is-valid');
                }

                // Prevent form submission if validation fails
                if (!isValid) {
                    event.preventDefault();
                }
            });

            // Remove validation error on input
            $('#code, #name').on('input', function() {
                $(this).removeClass('is-invalid is-valid'); // Remove both validation classes
                $(this).siblings('.form-text.text-danger').addClass('d-none'); // Hide error message
            });
        });
    </script>

</body>

</html>