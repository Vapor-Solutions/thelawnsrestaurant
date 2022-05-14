<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle"
            src="{{ auth()->user()->profile_photo_url }}" alt="" />
        <a href="javascript:void(0)">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
        </a>

    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <x-admin-links></x-admin-links>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
