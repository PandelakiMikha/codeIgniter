<!-- Modal untuk Tambah Penerima-->
<div class="modal fade" id="modalTambahPenerima" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Daftar Penerima</h4>
            </div>
            <form role="form" id="kirim_surat_ktu_tujuan" action="<?php echo base_url(); ?>ktu/kirim_surat_ktu" method="get" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="accordion" id="accordionExample">
                        <!-- Ini yang kab/kota -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button button-pilih-pemerintah-kab-kota" id="buttonPilihKabKota" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pilih Tujuan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" aria-expanded="true">
                                <div class="accordion-body">
                                    <div class="ktu-pilih-kab-kota">
                                        <div class="heading-penerima-kab-kota mt-3">
                                            <label for="cariKab/Kota" class="nama-kab-kota">Cari Tujuan:</label>
                                            <div class="input-icons">
                                                <span class="icons"><i class="bi bi-search"></i></span>
                                                <input class="form-control" id="cariKab/Kota" rows="3" placeholder="Cari">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="daftar-pilihan-KabKota">
                                            <?php
                                            if (!empty($data_user)) {
                                                foreach ($data_user as $dU) {
                                            ?>
                                                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                                                        <input class="form-check-input" type="radio" name="pilihTujuan" id="pilihTujuan" value="<?= $dU->email ?>">
                                                        <label class="form-check-label" for="pilihTujuan">
                                                            <?= $dU->name ?>
                                                        </label>
                                                    </div>
                                                    <hr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Selesai</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Main Content -->
<div class="container">
    <h3 style="text-align: center ;" class="headingKirimSurat">Kirim Surat</h3>
    <?= form_open_multipart('ktu/kirim_surat_ktu'); ?>
    <!-- <form role="form" id="kirim_surat_ktu" action="" method="post" enctype="multipart/form-data"> -->
    <div class="content">
        <div class="content-form">
            <div class="form-floating nomor-agenda">
                <input name="nomorAgenda" id="nomorAgenda" required="required" cols="30" rows="10" placeholder="Nomor Agenda" class="form-control"></input>
                <label for="nomorAgenda">Nomor Agenda</label>
            </div>
            <div class="form-jenis-surat">
                <select name="jenisSurat" id="jenisSurat" required="required" class="form-select form-select-lg">
                    <option value="" hidden selected>
                        <p>Pilih Jenis Surat</p>
                    </option>
                    <option value="surat">Surat</option>
                    <option value="laporan">Undangan</option>
                    <option value="undangan">Laporan</option>
                </select>
            </div>
            <div class="form-floating keterangan">
                <textarea name="keterangan" id="keterangan" required="required" cols="30" rows="10" class="form-control keteranga" placeholder="Keterangan"></textarea>
                <label for="keterangan">Keterangan</label>
            </div>
            <div class="form-floating perihal">
                <textarea name="perihal" id="perihal" required="required" cols="30" rows="10" class="form-control perihal" placeholder="Perihal"></textarea>
                <label for="perihal">Perihal</label>
            </div>
            <div class="form-tujuan">
                <select name="pilihTujuan" id="pilihTujuan" required="required" class="form-select form-select-lg">
                    <option value="" hidden selected>
                        <p>Pilih Tujuan</p>
                    </option>
                    <?php
                    if (!empty($data_user)) {
                        foreach ($data_user as $dU) {
                    ?>
                            <option value="<?= $dU->email ?>"><?= $dU->email ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <!-- <a class="btn tambah-penerima" data-bs-target="#modalTambahPenerima" data-bs-toggle="modal">
                    <img src="<?= base_url('assets/img/Plus.svg') ?>" alt="">
                    <p>Tambah Penerima</p>
                </a> -->
        </div>

        <div class="bagian-bawah">
            <div class="input-file">
                <!-- <label for="" class=""><b>Pilih File</b></label> -->
                <input class="form-control form-control-sm" name="File_name" id="File_name" type="file" value="" multiple />
            </div>
            <div class="btn-custom submit">
                <button type="submit" class="btn btn-danger" style="width: 230px; height: 55px; font-size: 25px;" id="liveAlertBtnKirim"><strong>Kirim</strong>
                </button>
            </div>
        </div>
    </div>
    <!-- </form> -->
    <?= form_close(); ?>
</div>



<style>
    .container {
        /* background-color: yellowgreen; */
    }


    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .content-form {
        margin: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
        width: 100%;
    }

    h3.headingKirimSurat {
        font-weight: 700;
    }

    .form-floating.nomor-agenda {
        width: 40%;
    }

    .form-jenis-surat {
        width: 40%;
    }

    .form-tujuan {
        width: 82%;
    }

    /* .form-jenis-surat select {
        font-size: 15px;
    } */
    .form-floating.keterangan {
        /* height: 70px; */
        /* width: 60%; */
        width: 82%;
        display: flex;
        justify-content: start;
    }

    .form-floating.keterangan>textarea {
        min-height: 60px;
    }

    .form-floating.perihal {
        /* height: 70px; */
        /* width: 60%; */
        width: 82%;
        display: flex;
        justify-content: start;
    }

    .form-floating.perihal>textarea {
        min-height: 60px;
    }

    .btn.tambah-penerima {
        text-decoration: none;
        font-weight: 500;
        color: #000;
        font-size: 18px;
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bagian-bawah {
        display: flex;
        align-items: center;
        gap: 2rem;
    }


    /* **** Styling untuk modal tambah penerima**** */

    /* Ini Navigasi untuk pilih Kab/Kota atau Provinsi atau Pusat  */

    /* .bar-pilih a {
        position: relative;
    } */

    .container-bar-pilih {
        /* gap: 5rem; */
    }

    /* .bar-pilih {
        position: relative;
        height: 50px;
        font-size: 18px;
        margin: 0;
        font-weight: 500;
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    } */

    /* .bar-pilih a {
        text-decoration: none;
        color: black;
        position: relative;
        padding: 10px 15px;
        display: inline-block;
        z-index: 1;
        text-align: center;
        background: rgba(255, 255, 255, 0.6);
        box-shadow:
            0px 0px 80px rgba(0, 0, 0, 0.17);
        border-radius: 10px;
        width: 90%;
    } */
    .accordion {
        /* text-decoration: none; */
        /* color: black; */
        /* position: relative; */
        /* padding: 10px 15px; */
        /* display: inline-block;
        z-index: 1; */
        /* text-align: center; */
        background: rgba(255, 255, 255, 0.6);
        box-shadow:
            0px 0px 80px rgba(0, 0, 0, 0.17);
        border-radius: 100px;
        background-color: #FF8B7C;
        /* width: 90%; */
    }


    /* --- Animasinya--- */
    /* .bar-pilih a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 0.175rem;
        background: #FF0000;
        left: 0;
        bottom: 0;
        transform: scale(0, 1);
        transition: transform 0.3s ease;
        justify-content: center;
        border-radius: 50px;
    } */

    /* .bar-pilih a:hover::after {
        transform: scale(1, 1);
    } */

    /* Ini animasi laeng */
    /* nav .animation {
        position: absolute;
        height: 0.175rem;
        background: #FF0000;
        left: 0;
        bottom: 0;
        z-index: 0;
        border-radius: 50px;
        justify-content: center;
        transition: all .5s ease 0s;
    } */

    /* a:nth-child(1) {
        width: 215px;
    }

    nav .start-kab-kota,
    a:nth-child(1):hover~.animation {
        width: 215px;
        left: 0;
    }

    a:nth-child(2) {
        width: 155px;
    }

    nav .start-prov,
    a:nth-child(2):hover~.animation {
        width: 155px;
        left: 215px;
    } */

    /* End of animasi laeng */

    /* Ini saat user arahkan kursor, teks dari a akan discale */
    .bar-pilih a:hover {
        transform: scale(1.02);
    }

    /* Styling untuk modal ketika KTU pilih kab-kota */
    .heading-penerima-kab-kota {
        display: flex;
        margin: 0;
        gap: 2rem;
        /* margin-left: 20px; */
    }

    .heading-penerima-kab-kota label {
        font-size: 18px;
        font-weight: 500;
    }

    .input-icons i {
        position: absolute;
        padding: 8px 10px;
    }

    .input-icons input {
        width: 100%;
        padding: 0px 30px;
    }

    .form-check.pilih-kab-kota,
    .form-check.pilih-pusat {
        margin-left: 20px;
    }

    .form-check-label {
        font-size: 18px;
        font-weight: 500;
    }

    /* Ini styling untuk modal ketika KTU pilih prov */
    .form-select option {
        width: 40%;
        font-size: 20px;
    }

    /* Styling untuk accordion */
    .accordion-button:not(.collapsed) {
        color: white;
        font-weight: 700;
        font-size: large;
        background: linear-gradient(80.79deg, #FF8B7C 0.55%, rgba(215, 212, 212, 0) 90.53%);
        box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
    }

    .accordion-button {
        font-weight: 700;
        font-size: large;
    }
</style>