<!-- <div class="hamburgerr bg-primary">
    <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
    </div>
</div> -->
<div class="sidebarr">
    <div class="hamburger   ">
        <div class="hamburgerr ">
            <div id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div id="hamburger"></div>
                </label>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="list-item">
            <a href="<?= base_url('surat_masuk') ?>">
                <img src="<?= base_url('assets/logo/Silonbog.png') ?>" alt="">
                <span class="header-title">Sistem Layanan Online Biro Organisasi</span>
            </a>
        </div>
    </div>
    <hr class="text-white">
    <div class="main">
        <div class="list-item">
            <?php if ($user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                <a href="<?= base_url('surat_masuk') ?>" class="item" id="surma">
                    <i class="fa-fw bi bi-envelope-paper"></i>
                    <span class="item-title">Surat Masuk</span>
                </a>
                <a href="<?= base_url('dispo') ?>" class="item">
                    <i class="fa-fw bi bi-clipboard-check"></i>
                    <span class="item-title">Disposisi</span>
                </a>
                <div class="dropdown">
                    <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-fw bi bi-journal-bookmark"></i>
                        <span class="item-title">Arsip</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                    </ul>
                </div>
            <?php elseif ($user['role_id'] == 3) : ?>
                <div class="dropdown">
                    <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-fw bi bi-envelope-paper"></i>
                        <span class="item-title">Surat</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                    </ul>
                </div>
                <a href="#" class="item">
                    <i class="fa-fw bi bi-clipboard-check"></i>
                    <span class="item-title">Disposisi</span>
                </a>
                <a href="#" class="item">
                    <i class="fa-fw bi bi-send-plus"></i>
                    <span class="item-title">Kirim Surat</span>
                </a>
                <div class="dropdown">
                    <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-fw bi bi-journal-bookmark"></i>
                        <span class="item-title">Arsip</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                    </ul>
                </div>
            <?php elseif ($user['role_id'] == 4) : ?>
                <a href="#" class="item">
                    <i class="fa-fw bi bi-envelope-paper"></i>
                    <span class="item-title">Surat Masuk</span>
                </a>
                <a href="#" class="item">
                    <i class="fa-fw bi bi-clipboard-check"></i>
                    <span class="item-title">Disposisi</span>
                </a>
            <?php elseif ($user['role_id'] == 5) : ?>
                <div class="dropdown">
                    <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-fw bi bi-envelope-paper"></i>
                        <span class="item-title">Surat</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                        <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                    </ul>
                </div>
                <a href="#" class="item">
                    <i class="fa-fw bi bi-send-plus"></i>
                    <span class="item-title">Kirim Surat</span>
                </a>
            <?php endif ?>
            <!-- <a href="#" class="item">
                <i class="fa-fw bi bi-envelope-paper"></i>
                <span class="item-title">Surat Masuk</span>
            </a>
            <a href="#" class="item">
                <i class="fa-fw bi bi-clipboard-check"></i>
                <span class="item-title">Disposisi</span>
            </a>
            <a href="#" class="item">
                <i class="fa-fw bi bi-send-plus"></i>
                <span class="item-title">Kirim Surat</span>
            </a>
            <div class="dropdown">
                <a href="#" class="item dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-fw bi bi-journal-bookmark"></i>
                    <span class="item-title">Arsip</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Surat Masuk</a></li>
                    <li><a class="dropdown-item" href="#">Surat Keluar</a></li>
                </ul>       
            </div> -->
        </div>
    </div>
</div>


<style>
    .sidebarr {
        display: flex;
        width: 350px;
        flex-direction: column;
        background-color: #EB6D6D;
        border-radius: 0px 20px 20px 0px;
        padding-left: 20px;
        /* padding-right: 20px; */
        box-sizing: border-box;
        transition: all ease-in 0.3s;
        z-index: 99;
    }

    .sidebarr.hide {
        width: 87px;
        transition: all ease-out 0.3s;
        padding-left: 10px;
        padding-right: 10px;
    }

    .sidebarr .hamburger {
        display: flex;
        justify-content: flex-end;
        margin-top: 17px;
        margin-bottom: -20px;
    }

    .sidebarr.hide .hamburger {
        margin-right: -43px;
        position: relative;
        z-index: 99;
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
        font-weight: bolder;
        font-size: 17px;
        color: #FFFFF0;
        margin-left: 10px;
        line-height: 33px;
        box-sizing: border-box;
    }

    .sidebarr.hide .header-title {
        display: none;
    }


    .sidebarr img {
        width: 70px;
        height: 70px;
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
        margin-top: 10px;
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
        background-color: #FFFFFF;
        width: 240px;
        box-sizing: border-box;
    }

    /* .sidebarr .main .list-item .dropdown.dropend .dropdown-menu.dropend {
        background-color: #FFFFF0;
    } */

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
        /* position: absolute; */
        overflow: hidden;
        top: 16px;

    }

    #menu-label {
        position: relative;
        display: block;
        height: 15px;
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