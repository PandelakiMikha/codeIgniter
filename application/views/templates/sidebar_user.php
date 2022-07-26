<!-- Modal -->
<div class="modal fade" style="border-radius: 50px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KIRIM SURAT</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <!-- content -->
                <form class="row g-3">
                    <!-- bagian dropdown -->
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Daerah</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Jenis Perangkat Daerah</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Daftar Dinas</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Jenis Perangkat</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Jenis Surat</label>
                        <select id="inputState" class="form-select">
                            <option selected>Pilih...</option>
                            <option>Surat</option>
                            <option>Laporan</option>
                            <option>Undangan</option>
                        </select>
                    </div>
                    <!-- bagian text input -->
                    <div class="col-12">
                        <label for="lainya" class="form-label">Lainya</label>
                        <input type="text" class="form-control" id="lainya" placeholder="Jenis Surat Lainya">
                    </div>
                    <div class="col-12">
                        <label for="perihal" class="form-label">Perihal</label>
                        <input type="text" class="form-control" id="perihal" placeholder="Masukan Perihal yang Anda Inginkan">
                    </div>

                    <!-- pilih file -->
                    <div class="mb-3 mt-3">
                        <label for="formFileSm" class="form-label">Pilih File</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept="application/pdf" multiple>
                    </div>

                    <div class=" d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 230px; height: 55px; font-size: 25px;"><strong>Kirim</strong></button>
                    </div>
                </form>
                <!-- end of content -->
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<!-- end of modal -->

<div class="sidebarr">
    <div class="header">
        <div class="list-item">
            <a href="#">
                <img src="<?= base_url('assets/logo/Silonbog.png') ?>" alt="">
                <span class="header-title">Sistem Layanan Online Biro Organisasi</span>
            </a>
        </div>
    </div>
    <hr class="text-white">
    <div class="container">
        <div class="main">
            <div class="list-item">
                <div class="dropdown">
                    <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-fw bi bi-envelope-paper"></i>
                        <!-- <i class="fas fa-fw fa-thin fa-folder-open"></i> -->
                        <span class="item-title">Surat</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="<?= base_url('user/tampilanHome_user') ?>">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('user/user_surat_kel') ?>">Surat Keluar</a></li>
                    </ul>
                </div>

                <!-- motode kirim surat 1 -->
                <!-- <a href="<?= base_url('user/kirim_surat') ?>" class="item">
                    <i class="fa-fw bi bi-send-plus"></i>
                    <span class="item-title">Kirim Surat</span>
                </a> -->

                <!-- metode kirim surat 2 -->
                <a class="item">
                    <div class="spmodal" data-bs-target="#exampleModal" data-bs-toggle="modal">
                        <i class="fa-fw bi bi-send-plus"></i>
                        <span class="item-title">Kirim Surat</span>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
    </div>
</div>


<style>
    .container {
        margin-top: 40%;
    }

    .sidebarr {
        display: flex;
        width: 350px;
        flex-direction: column;
        background-color: #EB6D6D;
        border-radius: 0px 20px 20px 0px;
        padding-left: 20px;
        padding-right: 20px;
        box-sizing: border-box;
        transition: all ease-in 0.3s;
    }

    .sidebarr.hide {
        width: 87px;
        transition: all ease-out 0.3s;
        padding-left: 10px;
        padding-right: 10px;
    }

    .sidebarr .header {
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .sidebarr.hide .header {
        display: flex;
        justify-content: center;
    }

    .sidebarr a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .sidebarr .header-title {
        font-weight: 700;
        font-size: 19px;
        color: #FFFFF0;
        margin-left: 10px;
        line-height: 33px;
    }

    .sidebarr.hide .header-title {
        display: none;
    }


    .sidebarr img {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        box-sizing: border-box;
    }

    .sidebarr.hide img {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        box-sizing: border-box;
    }

    .sidebarr .main {
        flex-grow: 1;
        margin-top: 30px;
    }

    .sidebarr .list-item {
        flex-direction: column;
        display: flex;
    }

    .sidebarr .main .list-item .item {
        color: #FFFFF0;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        text-decoration: none;
        height: 50px;
        transition: all ease-in .2s;
        border-radius: 10px;
        box-sizing: border-box;
        width: 250px;
    }

    .sidebarr .main .list-item .item:hover {
        border-radius: 10px;
        box-sizing: border-box;
        /* width: 250px; */
        transition: all ease-in .2s;
        padding-left: 6px;
        background: linear-gradient(224.57deg, #EABDBD 0.62%, rgba(217, 217, 217, 0) 75.19%);
    }

    .sidebarr.hide .main .list-item .item {
        justify-content: center;
        align-items: center;
        display: flex;
        width: 100%;
        transition: all ease-in .2s;
    }

    .sidebarr.hide .main .list-item .item:hover {
        padding-left: 0px;
        transition: all ease-in .2s;
    }

    .sidebarr .main .list-item .dropdown .dropdown-menu {
        margin-left: 10px !important;
        background-color: #FFFFF0;
        width: 240px;
        box-sizing: border-box;
    }

    .sidebarr .main .list-item .dropdown.dropend .dropdown-menu.dropend {
        background-color: #FFFFF0;
    }

    .sidebarr .main .list-item .dropdown .dropdown-menu a {
        color: #111827;
        font-weight: 500;
        font-size: 12px;
        padding-left: 6px;
        transition: all ease-in .2s;
    }

    .sidebarr .main .list-item .dropdown .dropdown-menu a:hover {
        /* padding: 0px; */
        padding-left: 7px;
        transition: all ease-in .2s;
    }

    .sidebarr i {
        font-size: 30px;
        margin-right: 6px;
    }

    .sidebarr.hide i {
        margin: 0px;
        transition: all ease-in .2s;
    }

    .sidebarr.hide i:hover {
        font-size: 35px;
        transition: all ease-in .2s;
    }

    .sidebarr .item-title {
        font-weight: 500;
        font-size: 16px;
        line-height: 30px;
    }

    .sidebarr.hide .item-title {
        display: none;
    }

    /* Toogle Menu */
    #menu-button {
        width: 32px;
        position: absolute;
        overflow: hidden;
        top: 16px;
    }

    #menu-label {
        position: relative;
        display: block;
        height: 20px;
        cursor: pointer;
    }

    #menu-checkbox {
        display: none;
    }

    #hamburger,
    #menu-label:after,
    #menu-label:before {
        position: absolute;
        left: 0;
        width: 100%;
        height: 4px;
        /* background-color: #111827; */
        background: linear-gradient(224deg, #EABDBD 80%, rgba(217, 217, 217, 0) 100%);
    }

    #menu-label:after,
    #menu-label:before {
        content: "";
        transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1) left;
    }

    #menu-label:before {
        top: 0;
    }

    #menu-label:after {
        top: 8px;
    }

    #hamburger {
        top: 16px;
    }

    #hamburger:before {
        content: "MENU";
        position: absolute;
        top: 5px;
        right: 0;
        left: 0;
        color: #EB6D6D;
        font-size: 10px;
        font-weight: bold;
        text-align: center;
    }

    #menu-checkbox:checked+#menu-label::before {
        left: -39px;
    }

    #menu-checkbox:checked+#menu-label::after {
        left: 39px;
    }

    #menu-checkbox:checked+#menu-label #hamburger::before {
        animation: moveUpThenDown 0.8s ease 0.2s forwards,
            shakeUp 0.8s ease 0.8s forwards,
            shakeDown 0.8s ease 0.8s forwards;
    }

    @keyframes moveUpThenDown {
        0% {
            top: 0;
        }

        50% {
            top: -27px;
        }

        100% {
            top: -14px;
        }
    }

    @keyframes shakeUp {
        0% {
            transform: rotateZ(0);
        }

        25% {
            transform: rotateZ(-10deg);
        }

        50% {
            transform: rotateZ(0);
        }

        75% {
            transform: rotateZ(10deg);
        }

        100% {
            transform: rotateZ(0);
        }
    }

    @keyframes shakeDown {
        0% {
            transform: rotateZ(0);
        }

        80% {
            transform: rotateZ(3deg);
        }

        90% {
            transform: rotateZ(-3deg);
        }

        100% {
            transform: rotateZ(0);
        }
    }

    /* .modal-body {
        background: #FF7878;
    } */

    /* .modal {
        color: antiquewhite;

    } */

    .modal-header {
        background: #FF7878;
        color: white;
        /* border-bottom-left-radius: 30px; */
        border-bottom-right-radius: 50px;
    }
</style>

<script>
    const menu = document.getElementById('menu-label');
    const sidebar = document.getElementsByClassName('sidebarr')[0];
    const dropdown = document.getElementsByClassName('dropdown')[0];

    menu.addEventListener('click', function() {
        sidebar.classList.toggle('hide');
        dropdown.classList.toggle('dropend');
        console.log('ok');
    })
</script>