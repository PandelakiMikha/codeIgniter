<!--
    Catatan: 
    Untuk sementara yang button for tiap bulan itu pas click cuman mo muncul yang surat masuk punya, kalo yang surat keluar belum ada karena dpe table nda ada
    Kan harusnya kalo user pilih yang surat keluar kan dia muncul yang surat keluar punya lagi to
 -->

<!-- <div class="container-arsip"> -->
<div class="container">
    <form action="" id="filter_surkel">
        <div class="select-wrapper">
            <div class="dropdownPilihTahun">
                <label for="form-select">Pilih Tahun</label>
                <select name="pilihTahunArsip" id="year" required class="form-select pilihTahunArsip">
                    <option value="" hidden selected>Pilih</option>
                    <option value="2022">2022</option>
                    <!-- <?php
                            if (!empty($year)) {
                                foreach ($year as $y) {
                            ?>
                            <option value="<?= $y->year ?>"><?= $y->year ?></option>
                    <?php
                                }
                            }
                    ?> -->

                </select>
            </div>

            <div class="dropdownPilihTahun">
                <label for="form-select">Pilih Bulan</label>
                <select name="pilihTahunArsip" id="month" class="form-select pilihTahunArsip">
                    <option value="0" hidden selected>Pilih</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-danger">Tampilkan</button>
            </div>
        </div>
    </form>

    <div class="col-md-12">
        <div id="surkel"></div>
    </div>
</div>



<style>
    .container-arsip {
        /* margin-left: 131px; */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .select-wrapper {
        display: flex;
        gap: 2rem;
        align-items: flex-end;
        margin-bottom: 20px;
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