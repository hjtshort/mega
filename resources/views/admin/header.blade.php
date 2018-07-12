<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="{{ asset('/cpanel/images/logo_star_black.png') }}" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="{{ asset('/cpanel/images/logo_star_mini.jpg') }}" alt=""></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
            <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="count">7</span>
                </a>
                <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-birthday-cake text-success fa-fw"></i>
                        <p class="notification-text">Today is John's birthday</p>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-phone text-danger fa-fw"></i>
                        <p class="notification-text">Call John Doe</p>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-handshake-o text-primary fa-fw"></i>
                        <p class="notification-text">Meeting Alisa</p>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-exclamation-triangle text-danger fa-fw"></i>
                        <p class="notification-text">Server space almost full</p>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-bell text-warning fa-fw"></i>
                        <p class="notification-text">Payment Due</p>
                    </a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="count">4</span>
                </a>
                <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
                    <a class="dropdown-item" href="#">
                        <div class="sender">
                            <p class="Sende-name">John Doe</p>
                            <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="sender">
                            <p class="Sende-name">Leanne Jones</p>
                            <p class="Sender-message">Can we schedule a call this afternoon?</p>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="sender">
                            <p class="Sende-name">Stella</p>
                            <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="sender">
                            <p class="Sende-name">James Brown</p>
                            <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item view-all">View all</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link profile-pic" href="#" data-toggle="dropdown"><img class="rounded-circle" src="{{ asset('/cpanel/images/faces/face1.jpg') }}" alt=""></a>
                <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item" href="{{ route('adminlogout') }}">
                        <i class="fa fa-power-off text-warning fa-fw"></i>
                        <p class="notification-text">Đăng xuất</p>
                    </a>

                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>