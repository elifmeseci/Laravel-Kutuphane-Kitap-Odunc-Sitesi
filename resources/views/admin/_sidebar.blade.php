<!-- Sidebar Nav -->
<aside id="sidebar" class="js-custom-scroll side-nav">
    <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
        <li class="side-nav-menu-item active">
            <a href="/" class="side-nav-menu-link media align-items-center" >
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                <span class="side-nav-fadeout-on-closed media-body">Home</span>
            </a>
        </li>
        <!-- Dashboard -->
        <li class="side-nav-menu-item active">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_home')}}">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard -->
        <!-- Authentication -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="#"
               data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-lock"></i>
              </span>
                <span class="side-nav-fadeout-on-closed media-body">Authentication</span>
                <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
            </a>

            <!-- Pages: subPages -->
            <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="{{route('admin_login')}}" class="d-block">Login</a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="/register">Register</a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="/forgot-password">Forgot Password</a>
                </li>
                <li class="side-nav-menu-item">
                    <a class="side-nav-menu-link" href="/email-verification">Email Verification</a>
                </li>
            </ul>
            <!-- End Pages: subPages -->
        </li>
        <!-- End Authentication -->

        <!-- Category -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_category')}}">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-view-list"></i>
                  </span>
                <span class="side-nav-fadeout-on-closed media-body">Category</span>
            </a>
        </li>
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_books')}}">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-book icon-text d-inline-block text-dark mt-2 mb-3"></i>
                  </span>
                <span class="side-nav-fadeout-on-closed media-body">Books</span>
            </a>
        </li>
        <!-- End Category -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_message')}}">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-email icon-text "></i>
                  </span>
                <span class="side-nav-fadeout-on-closed media-body">Contact Messages</span>
            </a>
        </li>
        <!-- End Category -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_review')}}">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-pencil-alt"></i>
                  </span>
                <span class="side-nav-fadeout-on-closed media-body">My Reviews</span>
            </a>
        </li>
        <!-- End Category -->
        <li class="side-nav-menu-item side-nav-has-menu">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_faq')}}">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-light-bulb"></i>
                  </span>
                <span class="side-nav-fadeout-on-closed media-body">FAQ</span>
            </a>
        </li>
        <!-- End Category -->


        <!-- Settings -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_setting')}}">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
                <span class="side-nav-fadeout-on-closed media-body">Settings</span>
            </a>
        </li>
        <!-- End Settings -->

        <!-- Static -->
        <li class="side-nav-menu-item">
            <a class="side-nav-menu-link media align-items-center" href="{{route('admin_users')}}">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-file"></i>
              </span>
                <span class="side-nav-fadeout-on-closed media-body">Users</span>
            </a>
        </li>
        <!-- End Static -->

    </ul>
</aside>
<!-- End Sidebar Nav -->
