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
                                <div class="card-title">Create Country</div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('countries.store') }}" method="POST" id="countryForm">
                                    @csrf <!-- Laravel CSRF Token -->

                                    <div class="form-group">
                                        <label for="code">Country Code</label>
                                        <input autocomplete="off" type="text" value="{{ old('code') }}" class="form-control" id="code" name="code" placeholder="Enter Country Code">
                                        <small id="codeError" class="form-text text-danger d-none">Country code is required.</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Country Name</label>
                                        <input autocomplete="off" type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" placeholder="Enter Country Name">
                                        <small id="nameError" class="form-text text-danger d-none">Country name is required.</small>
                                    </div>

                                    <div class="card-action p-2">
                                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Showing All Countries</h4>
                            </div>
                            <div class="card-body">
                                <table id="basic-datatables" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="basic-datatables_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 13.656px;">SNo.</th>
                                            <th style="width: 135.656px;">Name</th>
                                            <th style="width: 135.656px;">Name</th>
                                            <th style="width: 81.0938px;">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if($countries->isEmpty())
                                        <div class="alert alert-info">No Countries found...</div>
                                        @else

                                        @foreach($countries as $country)
                                        <tr role="row" class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $country->code }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <button class="btn btn-outline btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Select Action
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Create Region</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>

                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $countries->links('pagination::bootstrap-4') }}
                                </div>
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