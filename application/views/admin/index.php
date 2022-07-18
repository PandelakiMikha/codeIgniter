<!-- <div class="page">
    <div class="side-bar">
        <div class="title-app">
            <h1 class="txt-title">SILONBOG</h1>
            <h5 class="txt-subtitle">Sistem Layanan Onlin Biro Organisasi</h5>
        </div>
        <div class="list">
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-envelope-fill"></i>
                    <span class="item">Surat Masuk</span>
                </a>
            </div>
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-check-circle-fill"></i>
                    <span class="item">Disposisi</span>
                </a>
            </div>
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-archive-fill"></i>
                    <span class="item">Arsip Surat</span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="header">
            <div class="profile">
                <i class="bi bi-envelope position-relative">
                    <span class="position-absolute top-60 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px; margin-top: 20px">
                        99+
                    </span>
                </i>
                <i class="bi bi-person-circle me-3 ms-4"></i>
                <h5 style="width: 100px;">Dinas Kesehatan</h5>
            </div>
        </div>
        <div class="content1">
            <form class="d-flex flex-row col-12 mx-auto">
                <div class="content-list col-2">
                    <label for="exampleDataList" class="form-label">Cari Surat</label>
                    <input class="form-control form-control-lg me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="content-list col-2">
                    <label for="exampleDataList" class="form-label">Prov, Kab/Kot</label>
                    <select class="form-select form-select-lg" aria-label="Default select example">
                        <option value="1">Provinsi</option>
                        <option value="2">Kab/Kota</option>
                    </select>
                </div>
                <div class="content-list d-grid col-2">
                    <label for="exampleDataList" class="form-label">Divisi</label>
                    <select class="form-select form-select-lg" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="content2">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Pingirim</th>
                            <th scope="col">Judul Surat</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Dinas Pendidikan</td>
                            <td>Permohonan penugasan guru asdfasdfasdfasdfadsf asdfasdfasd asdfasdfdas</td>
                            <td>12.20 AM</td>
                        </tr>
                        <tr>
                            <td scope="row">Dinas Perdagangan</td>
                            <td>Permohonan penugasan guru</td>
                            <td>12.20 AM</td>
                        </tr>
                        <tr>
                            <td scope="row">Dinas Sosial</td>
                            <td>Permohonan penugasan guru</td>
                            <td>12.20 AM</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->

<!-- <style>
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    .page {
        display: flex;
        min-height: 100vh;
    }

    .side-bar {
        /* display: flex; */
        background-color: #EB6D6D;
        width: 400px;
        padding-left: 26px;
        padding-right: 26px;
        padding-top: 50px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    .side-bar a {
        text-decoration: none;
        color: #000;
        display: flex;
        align-items: center;
        box-sizing: border-box;
    }

    .side-bar .title-app .txt-title {
        font-weight: 700;
        font-size: 50px;
        line-height: 75px;
        color: #000000;
    }

    .side-bar .title-app .txt-subtitle {
        font-weight: 500;   
        font-size: 18px;
        line-height: 27px;
        color: #FFFFFF;
    }

    .side-bar .list {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        box-sizing: border-box;
        background-color: #FFFFFF;
        border-radius: 8px;
    }

    .side-bar .list .list-item {
        display: flex;
        align-items: center;
        padding: 12px 10px;
        border-radius: 8px;
        flex-grow: 1;
        height: 65px;
        box-sizing: border-box;
        transition: all ease-in .2s;
    }

    .side-bar .list .list-item:hover {
        background: #FACDCD;
        transition: all ease-in .2s;

    }

    .side-bar .list .list-item .bi {
        font-size: 40px;
    }

    .side-bar .list .list-item .item {
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
        color: #000000;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-left: 22px;
    }

    .main-content {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
    }

    .main-content .header {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        padding: 40px 40px 40px 0px;
        box-sizing: border-box;
    }

    .main-content .header .profile {
        display: flex;
        /* flex: 1;
        justify-content: flex-end; */
        align-items: center;
    }

    .main-content .header .profile .bi {
        font-size: 50px;
    }

    .main-content .content1 {
        display: flex;
        padding-left: 50px;
        padding-top: 65px;
        box-sizing: border-box;
    }

    .main-content form {
        display: flex;
        box-sizing: border-box;
    }

    .main-content .content1 .content-list {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        box-sizing: border-box;
    }

    .main-content .d-flex .content-list label {
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
        color: #000000;
    }

    .main-content .content2 .table-responsive .table tbody tr:hover {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .main-content .content2 .table-responsive .table thead {

        border-radius: 20px !important;
        box-sizing: border-box;
    }

    .main-content .content2 {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
        box-sizing: border-box;
    }
</style> -->

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <div class="sidebar-brand d-flex flex-column justify-content-center mt-3">
            <div class="sidebar-brand-text ">SILONBOG</div>
            <div class="text-long ">Sistem Layanan Online Biro Organisasi</div>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider mt-4 mb-2">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-solid fa-envelope"></i>
                <span>Surat Masuk</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Surat</a>
                    <a class="collapse-item" href="#">Laporan</a>
                    <a class="collapse-item" href="#">Undangan</a>
                    <a class="collapse-item" href="#">Lainya</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-solid fa-check"></i>
                <span>Disposisi</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Surat</a>
                    <a class="collapse-item" href="#">Laporan</a>
                    <a class="collapse-item" href="#">Undangan</a>
                    <a class="collapse-item" href="#">Lainya</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw bi bi-journal-bookmark-fill"></i>
                <span>Arsip</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Surat</a>
                    <a class="collapse-item" href="#">Laporan</a>
                    <a class="collapse-item" href="#">Undangan</a>
                    <a class="collapse-item" href="#">Lainya</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link btn-outline-danger d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars text-danger"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Alerts -->

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fass fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'] ?></span>
                            <img class="img-profile rounded-circle" src="https://cdn.pixabay.com/photo/2022/05/21/06/52/standup-paddleboarding-7210815_960_720.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-danger">Daftar Surat Masuk</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<style>
    #accordionSidebar {
        background-color: #EB6D6D;
    }

    .navbar-nav .sidebar-brand {
        align-items: flex-start !important;
    }

    .navbar-nav .sidebar-brand .sidebar-brand-text {
        font-weight: 700;
        font-size: 30px;
        line-height: 75px;
        color: #FFFFFF;
        margin-bottom: -15px !important;
    }

    .navbar-nav .sidebar-brand .text-long {
        font-weight: 500;
        font-size: 10px;
        color: #FFFFFF;
        text-align: start;
    }

    .navbar-nav .nav-item a {
        transition: all ease-in .2s;
    }

    .navbar-nav .nav-item a:hover {
        /* background: #FACDCD; */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.35rem;
        transition: all ease-in .2s;
    }

    .navbar-nav .nav-item .nav-link .fas {
        font-size: 20px;
        color: white;
    }

    .navbar-nav .nav-item .nav-link .fass {
        font-size: 20px;
        color: #212121;
    }

    .navbar-nav .nav-item .nav-link span {
        font-size: 15px;
        color: white;
    }

    .card-body .table-responsive #dataTable_wrapper .row .col-sm-12 .dataTables_length label {
        background-color: white;
    }

    .card-body .table-responsive #dataTable_wrapper .row .col-sm-12 .dataTables_length label select:focus {
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6) !important;
    }
</style>