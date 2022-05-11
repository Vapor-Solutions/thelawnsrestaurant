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
                    <a href="{{ route('admin.clients.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.clients.create' ? 'active' : '' }}">
                        Add a new Client
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown  @if (Route::is('admin.projects.*')) active @endif ">
            <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="briefcase"></i>
                <span>Projects</span>
            </a>
            <ul class="nav-submenu menu-content"
                style="display: {{ Request::is('admin/projects/*') ? 'block' : 'none' }}">
                <li>
                    <a href="{{ route('admin.projects.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.projects.index' ? 'active' : '' }}">
                        Project Categories
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.projects.index') }}"
                        class="{{ Route::currentRouteName() == 'admin.projects.index' ? 'active' : '' }}">
                        List of My Projects
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.projects.create') }}"
                        class="{{ Route::currentRouteName() == 'admin.projects.create' ? 'active' : '' }}">
                        Add a new Project
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
