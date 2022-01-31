<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a href="{{ route('admin.dashboard') }}" class="navbar-brand ps-3">Admin {{ config('app.name') }}</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="ms-auto"></div>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item">
            <a href="{{ route('front.home') }}" class="nav-link" target="_blank">
                <i class="fas fa-fw fa-home"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-fw fa-user"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-fw me-1 fa-user-cog"></i> Profile
                    </a>
                </li>
                <li><hr class="dropdown-divider"/></li>
                <li>
                    <form action="{{ route('admin.auth.logout') }}" method="POST">
                        @csrf
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt fa-fw me-1"></i> Logout
                        </a>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
