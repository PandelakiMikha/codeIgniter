<!--
    Catatan: 
    Untuk sementara yang button for tiap bulan itu pas click cuman mo muncul yang surat masuk punya, kalo yang surat keluar belum ada karena dpe table nda ada
    Kan harusnya kalo user pilih yang surat keluar kan dia muncul yang surat keluar punya lagi to
 -->

<!-- <div class="container-arsip"> -->
<div class="container">
    <div class="dropdownPilihTahun mt-5">
        <label for="form-select">Pilih Tahun</label>
        <select name="pilihTahunArsip" id="pilih_tahun" class="form-select pilihTahunArsip">
            <option value="" hidden selected>Pilih</option>
            <?php
            if (!empty($year)) {
                $get_year = '';
                foreach ($year as $y) {
            ?>
                    <option value="<?= $y->year ?>"><?= $y->year ?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>

    <!-- Arsip File Start -->
    <div class="container-arsip">
        <div class="row">
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Januari</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" id="januari">
                    <h5>Februari</h5>
                </a>
            </div>

            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Maret</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>April</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                        <h5>Mei</h5>
                    </a>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Juni</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Juli</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Agustus</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>September</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Oktober</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>November</h5>
                </a>
            </div>
            <div class="col-custom bulan">
                <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
                <a href="<?= base_url('/arsip/arsip_surat_masuk') ?>" class="">
                    <h5>Desember</h5>
                </a>
            </div>
        </div>
        <!-- Arsip File End -->
    </div>
</div>



<style>
    .container-arsip {
        /* margin-left: 131px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    label {
        font-weight: 700;
        font-size: 20px;
    }

    .form-select.pilihTahunArsip {
        width: 200px;
    }

    .row {
        gap: 3rem;
        margin: 0;
        padding: 0;
        width: 80%;
        justify-content: center;
        margin-top: 20px;
    }

    .col-custom.bulan {
        display: flex;
        align-items: center;
        border: 1px solid black;
        border-radius: 10px;
        width: 250px;
        height: 90px;
        /* background: rgb(256, 256, 256); */
        background: transparent !important;
        gap: 2rem;
    }

    .col-custom.bulan a {
        text-decoration: none;
        color: black;
    }

    .col-custom.bulan h5 {
        font-weight: 700;
    }
</style>