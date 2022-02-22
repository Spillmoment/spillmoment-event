<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">


            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, {{ auth()->user()->name ?? '' }}</h2>
                    <a href="{{ route('login') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="btn btn-secondary text-dark btn-xs"><span
                            class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
                <form id="logout-form" action="{{ route('login') }}" method="POST" style="display: none;">
                    @csrf
                    @method('HEAD')
                </form>
            </div>

            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">

            <!-- Sidebar Admin -->
            <li class="nav-item {{ Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Sidebar Event -->
            <li class="nav-item {{ (request()->is('admin/event*')) ? 'active' : '' }}">
                <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon"><span class="fas fa-code"></span></span>
                        Event
                    </span>
                    <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
                </span>
                <div class="multi-level collapse {{ (request()->is('admin/event*')) ? 'show' : '' }}" role="list"
                    id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ (Request::route()->getName() == 'admin.event.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.event.index') }}"><span>Data Event</span></a>
                        </li>
            </li>
        </ul>
    </div>
    </li>



    </ul>
    </div>
</nav>
