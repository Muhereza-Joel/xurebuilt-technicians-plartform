@include('layouts.header')

<body>
    <!-- Navbar -->
    @include('layouts.appBar')
    
    <!-- Technician Finder Section -->
    <section class="py-3">
        <div class="container px-3">
            <div class="row">
                <!-- Filter Sidebar -->
                <aside class="col-md-3 mb-4">
                    <div class="card border-0 shadow-sm p-4">
                        <h4 class="fw-bold text-success mb-4">Technicians Finder</h4>

                        <!-- Category Filter -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Category</label>
                            <select class="form-select" id="categoryFilter">
                                <option value="">All Categories</option>
                                <option value="plumber">Plumber</option>
                                <option value="electrician">Electrician</option>
                                <option value="carpenter">Carpenter</option>
                                <!-- Add other categories as needed -->
                            </select>
                        </div>

                        <!-- Location Filter -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Location</label>
                            <select class="form-select" id="locationFilter">
                                <option value="">All Locations</option>
                                <option value="city1">Fort Portal Tourism City</option>
                                <option value="city2">Kyenjojo</option>
                                <!-- Add other locations as needed -->
                            </select>
                        </div>

                        <!-- Experience Filter -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Experience Level</label>
                            <select class="form-select" id="experienceFilter">
                                <option value="">Any Experience Level</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="expert">Expert</option>
                            </select>
                        </div>

                        <!-- Rating Filter -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rating</label>
                            <select class="form-select" id="ratingFilter">
                                <option value="">Any Rating</option>
                                <option value="4">4 Stars & Up</option>
                                <option value="3">3 Stars & Up</option>
                                <option value="2">2 Stars & Up</option>
                                <option value="1">1 Star & Up</option>
                            </select>
                        </div>

                        <!-- Filter Button -->
                        <div class="d-grid mt-4">
                            <button class="btn btn-success" id="applyFilters">Apply Filters</button>
                        </div>
                    </div>
                </aside>

                <!-- Technician List Section -->
                <div class="col-md-9">
                    <div class="row" id="technicianList">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


@include('layouts.footer')