    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img src="img/logo-malang.png" width="100" height="70.5" />
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('dashboard') }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Settings') }}
        </div>

        <!-- Nav Item - Profile -->


        <!-- Nav Item - About -->
        <li class="nav-item {{ Nav::isRoute('laporan') }}">
            <a class="nav-link" href="{{ route('proyek') }}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('laporan') }}</span>
            </a>
        </li>


        <li class="nav-item {{ Nav::isRoute('kegiatan') }}">
            <a class="nav-link" href="{{ route('kegiatan') }}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('kegiatan') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
