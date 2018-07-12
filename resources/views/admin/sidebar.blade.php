<nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
    <div class="user-info">
        <img src="{{ asset('/cpanel/images/face.jpg') }}" alt="">
        <p class="name">Richard V.Welsh</p>
        <p class="designation">Manager</p>
        <span class="online"></span>
    </div>
    <ul class="nav">
        <li class="item-category">Main</li>
        <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="{{ route('dashboard') }}" aria-expanded="false"
               aria-controls="dashboards">
                <img src="{{ asset('/cpanel/images/icons/1.png') }}" alt="">
                <span class="menu-title">Dashboard<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="dashboards">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">
                            Dashboard 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/dashboards/dashboard-2.html">
                            Dashboard 2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/dashboards/dashboard-3.html">
                            Dashboard 3
                        </a>
                    </li>
                </ul>
            </div>
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
    </ul>
</nav>