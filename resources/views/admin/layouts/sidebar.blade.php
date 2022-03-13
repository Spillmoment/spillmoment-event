<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">

            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img @isset(Auth::guard('admin')->user()->photo)
                    src="{{ asset('uploads/users/' . Auth::guard('admin')->user()->photo) }}"
                    @else
                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                    @endisset
                    class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, {{ Auth::guard('admin')->user()->name ?? 'Guest' }}</h2>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="btn btn-secondary text-dark btn-xs"><span
                            class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">

            <!-- Sidebar Dashboard -->
            <li class="nav-item {{ Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Sidebar Kategori -->
            <li class="nav-item {{ (request()->is('admin/kategori*')) ? 'active' : '' }}">
                <a href="{{ route('admin.kategori.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-tag"></span></span>
                    <span>Kategori Event</span>
                </a>
            </li>

            <!-- Sidebar Speaker -->
            <li class="nav-item {{ (request()->is('admin/speaker*')) ? 'active' : '' }}">
                <a href="{{ route('admin.speaker.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-users"></span></span>
                    <span>Speaker Event</span>
                </a>
            </li>

            <!-- Sidebar Partner -->
            <li class="nav-item {{ (request()->is('admin/partner*')) ? 'active' : '' }}">
                <a href="{{ route('admin.partner.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-handshake"></span></span>
                    <span>Partner Event</span>
                </a>
            </li>

            <!-- Sidebar Event -->
            <li class="nav-item {{ (request()->is('admin/event*')) ? 'active' : '' }}">
                <a href="{{ route('admin.event.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-folder"></span></span>
                    <span>Data Event</span>
                </a>
            </li>

            <!-- Sidebar Event Registrasi -->
            <li class="nav-item {{ (request()->is('admin/register-event*')) ? 'active' : '' }}">
                <a href="{{ route('admin.register-event.index') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-user-plus"></span></span>
                    <span>Registrasi Event</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
