<div>
    <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fas fa-angle-right ps-2" aria-hidden="true"></i>
            </div>
        </li>
        <li class="sidebar-main-title">
            <div>
                <h6>General</h6>
            </div>
        </li>
        <li class="dropdown">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i data-feather="home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="dropdown">
            <a class="nav-link" href="{{ route('profile.show') }}">
                <i data-feather="user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="dropdown  @if (Route::is('admin.clients.*')) active @endif ">
            <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="users"></i>
                <span>Clients</span>
            </a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/clients/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.clients.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.index' ? 'active' : '' }}">
                        List of My Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.maintenance') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.maintenance' ? 'active' : '' }}">
                        Maintenance Mode Subscribers
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.create' ? 'active' : '' }}">
                        Add a new Client
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown  @if (Route::is('admin.bookings.*')) active @endif ">
            <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="calendar"></i>
                <span>Bookings</span>
            </a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/bookings/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.clients.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.bookings.index' ? 'active' : '' }}">
                        Calendar
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.bookings.create' ? 'active' : '' }}">
                        Make a Booking
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
