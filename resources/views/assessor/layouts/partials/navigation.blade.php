<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ route('dashboard.index') }}" class="navbar-brand">
            <img src="{{ asset('img/assessor.png') }}" alt="Assessor Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Assessor V(3)</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ setSidebarActive(['dashboard.index']) }}" href="{{ route('dashboard.index') }}">
                        <i class="fad fa-home-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle {{ setSidebarActive(['search.index', 'validation.index', 'tracking.index']) }}">
                        <i class="fad fa-user-shield"></i> Roles And Permissions
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li>
                            <a href="{{ route('account.index') }}" class="dropdown-item {{ setSidebarActive(['account.index']) }}">
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('role.index') }}" class="dropdown-item {{ setSidebarActive(['role.index']) }}">
                                Roles
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle {{ setSidebarActive(['search.index', 'validation.index', 'tracking.index']) }}">
                        Dropdown
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li>
                            <a href="{{ route('search.index') }}" class="dropdown-item {{ setSidebarActive(['search.index']) }}">
                                Search
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('validation.index') }}" class="dropdown-item {{ setSidebarActive(['validation.index']) }}">
                                Validation
                            </a>
                        </li>

                        <li class="dropdown-divider"></li>
                        <!-- Level two dropdown -->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                class="dropdown-item dropdown-toggle {{ setSidebarActive(['tracking.index']) }}">
                                Hover for action
                            </a>
                            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                <li>
                                    <a tabindex="-1" href="{{ route('tracking.index') }}"
                                        class="dropdown-item {{ setSidebarActive(['tracking.index']) }}">
                                        Tracking
                                    </a>
                                </li>
                                <!-- Level three dropdown -->
                                <li class="dropdown-submenu">
                                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">
                                        More Options
                                    </a>
                                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">Option 1</a></li>
                                        <li><a href="#" class="dropdown-item">Option 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level three -->
                                <li><a href="#" class="dropdown-item">Another Option</a></li>
                            </ul>
                        </li>
                        <!-- End Level two -->
                    </ul>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-md-3 ml-0">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Right navbar links -->
        <ul class="order-md-3 navbar-nav navbar-no-expand order-1 ml-auto">
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
                    @auth
                        <img src="{{ asset('img/admin.png') }}" class="user-image img-circle elevation-2" alt="User Image"
                            style="width: 35px; height: 35px;">
                        <span class="d-none d-md-inline ml-2">{{ Auth::user()->name }}</span>
                    @else
                        <span>Not Logged in</span>
                    @endauth
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    @auth
                        <a href="{{ route('profile.index') }}" class="dropdown-item">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">
                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i> Login
                        </a>
                    @endauth
                </div>
            </li>
        </ul>
    </div>
</nav>
