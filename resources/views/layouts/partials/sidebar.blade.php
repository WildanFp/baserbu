    <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <img src="img/logo-malang.png" width="100" height="70.5" />
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0 BG-success">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('dashboard') }}">
            <a class="nav-link text-success" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt text-success"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider bg-success">

        <!-- Heading -->
        <div class="sidebar-heading text-success">
            {{ __('Settings') }}
        </div>

        <!-- Nav Item - Profile -->


        <!-- Nav Item - About -->
        <li class="nav-item {{ Nav::isRoute('laporan') }}">
            <a class="nav-link text-success" href="{{ route('proyek') }}">
                <i class="fas fa-fw fa-hands-helping text-success"></i>
                <span>{{ __('laporan') }}</span>
            </a>
        </li>


        <li class="nav-item {{ Nav::isRoute('buat-laporan') }}">
            <a class="nav-link text-success" href="{{ route('buat-laporan') }}">
                <i class="fas fa-fw fa-hands-helping text-success"></i>
                <span>{{ __('buat laporan') }}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link text-success" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user text-success"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block bg-success">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline text-success ">
            <button class="rounded-circle border-0 bg-success" id="sidebarToggle"></button>
        </div>

    </ul>
