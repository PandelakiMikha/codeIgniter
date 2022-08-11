<!-- <div class="container-arsip"> -->



<div class="dropdownPilihTahun mt-5">
    <label for="form-control">Pilih Tahun</label>
    <select name="pilihTahunArsip" id="" class="form-select pilihTahunArsip">
        <option value="1" hidden selected>Pilih</option>
        <option value="2">2015</option>
        <option value="3">2016</option>
        <option value="4">2017</option>
        <option value="5">2018</option>
        <option value="6">2019</option>
        <option value="7">2020</option>
        <option value="8">2021</option>
    </select>
</div>

<!-- Arsip File Start -->
<div class="container-arsip">
    <div class="row">
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Januari</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Februari</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Maret</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>April</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Mei</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Juni</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Juli</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Agustus</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>September</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Oktober</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>November</h5>
        </div>
        <div class="col-custom bulan">
            <img src="<?= base_url('assets/img/ArsipFile.svg') ?>" alt="">
            <h5>Desember</h5>
        </div>
    </div>
    <!-- Arsip File End -->
</div>



<style>
    .dropdownPilihTahun {
        margin-left: 154px;
    }

    .container-arsip {
        /* margin-left: 131px; */
        display: flex;
        align-items: center;
        justify-content: center;
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

    .col-custom.bulan h5 {
        font-weight: 700;
    }
</style>