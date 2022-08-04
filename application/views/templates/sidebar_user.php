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
                <form class="row g-3" action="" method="post">
                    <!-- bagian dropdown -->

                    <div class="col-md-4">
                        <label for="daerah" class="form-label"><b>Daerah</b></label>
                        <select name="daerah" id="daerah" class="form-select" value="<?= set_value('daerah') ?>">
                            <?php foreach ($daerah_data as $value) : ?>
                                <option value="" hidden>Pilih..</option>
                                <option value="<?= $value->id ?>"><?= $value->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="perangkat_daerah2" class="form-label"><b>Jenis Perangkat / kementrian</b></label>
                        <select name="perangkat_daerah2" id="perangkat_daerah2" class="form-select" value="<?= set_value('perangkat_daerah2') ?>">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col-md-4 mt-5">
                        <!-- <label for="daftar_dinas" class="form-label"><b>Daftar Dinas</b></label> -->
                        <select name="daftar_dinas" id="daftar_dinas" class="form-select" value="<?= set_value('daftar_dinas') ?>">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="uptd" class="form-label"><b>UPTD dan Dinas Induk</b></label>
                        <select name="uptd" id="uptd" class="form-select" value="<?= set_value('uptd') ?>">
                            <option selected>Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="jenis_surat" class="form-label"><b>Jenis Surat</b></label>
                        <select name="jenis_surat" id="jenis_surat" class="form-select" value="<?= set_value('jenis_surat') ?>">
                            <?php foreach ($jenis_surat as $value) : ?>
                                <option value="" hidden>Pilih..</option>
                                <option value="<?= $value->id ?>"><?= $value->name ?></option>

                            <?php endforeach ?>
                        </select>
                    </div>
                    <!-- bagian text input -->
                    <div class="col-12">
                        <label for="lainya" class="form-label"><b>Lainya</b></label>
                        <input type="text" class="form-control" name="lainya" id="lainya" placeholder="Jenis Surat Lainya" value="<?= set_value('lainya') ?>">
                    </div>
                    <div class="col-12">
                        <label for="perihal" class="form-label"><b>Perihal</b></label>
                        <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Masukan Perihal yang Anda Inginkan" value="<?= set_value('perihal') ?>">
                    </div>

                    <!-- pilih file -->
                    <div class="mb-3 mt-3">
                        <label for="nama_file" class="form-label"><b>Pilih File</b></label>
                        <input class="form-control form-control-sm" name="nama_file" id="nama_file" type="file" accept="application/pdf" value="<?= set_value('nama_file') ?>" multiple>
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
<!-- <div class="main-content">
    <div id="menu-button">
        <input type="checkbox" id="menu-checkbox">
        <label for="menu-checkbox" id="menu-label">
            <div id="hamburger"></div>
        </label>
    </div>
</div> -->


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

<!-- dropdown select bertingkat -->
<!-- <script>
    $(document).ready(function() {
        $("#perangkat_daerah");

        daerahLoad();
        // tabels();
    });

    function daerahLoad() {
        $("#perangkat_daerah").change(function() {
            var getPerangkatDaerah = $("#perangkat_daerah").val();
            // console.log(getPerangkatDaerah);
            // tabels();
        });

        $("#daerah").change(function() {
            var ambilDaerah = $("#daerah").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?= base_url('User/getDataPerangkat'); ?>",
                data: {
                    daerah: ambilDaerah,
                },
                success: function(data) {
                    console.log(data);

                    var html = "";
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option selected hidden>Pilih Perangkat Daerah</option> <option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }

                    $("#perangkat_daerah").html(html);
                    $("#perangkat_daerah").show();
                }
            });

        });
    };
</script> -->