<nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
    <div class="user-info">
        @if(Auth::guard('admin')->user()->provider!='')
        <img src="{{ Auth::guard('admin')->user()->avatar }}" alt="">
            @else
            <img src="{{ asset('/cpanel/images/admin/'.Auth::guard('admin')->user()->avatar) }}" alt="">
        @endif
        <p class="name">{{ Auth::guard('admin')->user()->name }}</p>
        <p class="designation">Manager</p>
    </div>
    <ul class="nav">
        <li class="item-category">Main</li>
        <li class="nav-item @if(Request::segment(1)=='admin' && empty(Request::segment(2))) active @endif">
            <a class="nav-link"  href="{{ route('dashboard') }}" aria-expanded="false"
               aria-controls="dashboards">
                <img src="{{ asset('/cpanel/images/icons/1.png') }}" alt="">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#layouts" aria-expanded="false" aria-controls="layouts">
                <img src="{{ asset('/cpanel/images/icons/009-layout.png') }}" alt="">
                <span class="menu-title">Layouts<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/boxed_layout.html">
                            Boxed Layout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/horizontal_menu.html">
                            Horizontal Sidebar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/horizontal_menu_top.html">
                            Horizontal Sidebar (alt)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/sidebar_toggle_display.html">
                            Sidebar Hidden
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/sidebar_absolute.html">
                            Sidebar Overlay
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/layout/sidebar_icon.html">
                            Icon Menu
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link"  href="{{ route('adminlogout') }}" aria-expanded="false"
               aria-controls="dashboards">
                <img src="{{ asset('/cpanel/images/icons/1.png') }}" alt="">
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>