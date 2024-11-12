<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="{{ url('/dashboard') }}" class="logo text-light">
       
        XureBuilt Connect
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a
            data-bs-toggle="collapse"
            href="{{ url('/dashboard') }}"
            class="collapsed"
            aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <span class="caret"></span>
          </a>

        </li>

        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applications">
            <i class="fas fa-layer-group"></i>
            <p>Locations</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="applications">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('countries.index') }}">
                  <span class="sub-item">Countries</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Regions</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Districts</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Villages</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <!--End Menu Item -->
        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applications">
            <i class="fas fa-layer-group"></i>
            <p>Applications</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="applications">
            <ul class="nav nav-collapse">
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Recieved Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!--End Menu Item -->


        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#job-listings">
            <i class="fas fa-layer-group"></i>
            <p>Job Listings</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="job-listings">
            <ul class="nav nav-collapse">
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Recieved Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!--End Menu Item -->

        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#subscriptions">
            <i class="fas fa-layer-group"></i>
            <p>Subscriptions</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="subscriptions">
            <ul class="nav nav-collapse">
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Recieved Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!--End Menu Item -->



        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#payments">
            <i class="fas fa-layer-group"></i>
            <p>Payments</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="payments">
            <ul class="nav nav-collapse">
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Recieved Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!--End Menu Item -->


        <!-- Menu Item -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#profiles">
            <i class="fas fa-layer-group"></i>
            <p>Profiles</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="profiles">
            <ul class="nav nav-collapse">
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">Recieved Applications</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="sub-item">New Applications</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!--End Menu Item -->


      </ul>
    </div>
  </div>
</div>