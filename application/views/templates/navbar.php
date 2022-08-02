<div class="main-content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->

            <!-- Nav Item - Messages -->
            <li class="nav-item mx-1" id="pesan">
                <div class="nav-link ">
                    <i class="fas fass fa-envelope fa-fw" style="font-size: 25px;"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter"><?= $totals ?></span>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=  $user['name']?></span>
                    <img class="img-profile rounded-circle" src="https://cdn.pixabay.com/photo/2022/05/21/06/52/standup-paddleboarding-7210815_960_720.jpg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>

    <style>
        .main-content {
            flex-grow: 1;
            /* margin-left: -20px; */
        }

        .navbar {
            box-shadow: 0 3px 0 -2px lightgray;
            -webkit-box-shadow: 0 3px 5px 0px rgba(0, 0, 0, 0.47);
            -moz-box-shadow: 0 3px 9px 0px rgba(0, 0, 0, 0.47);
            margin-left: -20px;
        }

        .nav-item .nav-link .badge-counter {
            margin-top: -0.8rem !important;
        }
    </style>