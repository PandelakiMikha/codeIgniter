<!-- Modal untuk Tambah Penerima-->
<div class="modal fade" id="modalTambahPenerima" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Daftar Penerima</h4>
            </div>
            <div class="modal-body">
                <!-- <div class="bar-pilih"> -->
                <!-- <ul>
                        <li><a type="button" class="button-pilih-pemerintah">Kabupaten/Kota</a></li>
                        <li><a type="button" class="button-pilih-pemerintah">Provinsi</a></li>
                        <li><a type="button" class="button-pilih-pemerintah">Pusat</a></li>
                        <li class="animation start"></li>
                    </ul> -->
                <nav class="bar-pilih">
                    <a type="button" class="button-pilih-pemerintah">Kabupaten/Kota</a>
                    <a type="button" class="button-pilih-pemerintah">Provinsi</a>
                    <a type="button" class="button-pilih-pemerintah">Pusat</a>
                    <!-- <div class="animation start-animation"></div> -->
                </nav>
                <!-- </div> -->
                <!-- Ini kalo KTU pilih Kab/Kota -->
                <!-- <div class="heading-penerima-kab-kota mt-3">
                    <label for="cariKab/Kota" class="nama-kab-kota">Cari Kabupaten/Kota:</label>
                    <div class="input-icons">
                        <span class="icons"><i class="bi bi-search"></i></span>
                        <input class="form-control" id="cariKab/Kota" rows="3" placeholder="Cari">
                    </div>
                </div>
                <hr>
                <div class="ktu-pilih-kab-kota">
                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota1" value="option1">
                        <label class="form-check-label" for="pilihanKabKota1">
                            Kabupaten Minahasa Utara
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota2" value="option2">
                        <label class="form-check-label" for="pilihanKabKota2">
                            Kota Bitung
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota3" value="option3">
                        <label class="form-check-label" for="pilihanKabKota3">
                            Kabupaten Minahasa
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanKabKota" id="pilihanKabKota4" value="option4">
                        <label class="form-check-label" for="pilihanKabKota4">
                            Kabupaten Minahasa Selatan
                        </label>
                    </div>
                    <hr>
                </div> -->

                <!-- Ini kalo KTU pilih Prov -->
                <div class="ktu-pilih-prov">
                    <div class="bagian-form-select d-flex gap-3 mt-3">
                        <select name="" id="" class="form-select jenis-perangkat-daerah">
                            <option value="defaultValue" selected hidden>Pilih Jenis Perangkat Daerah</option>
                            <option value="jenisPerangkatDaerah1">Dinas</option>
                            <option value="jenisPerangkatDaerah2">Badan</option>
                            <option value="jenisPerangkatDaerah3">Setda</option>
                        </select>
                        <select name="" id="" class="form-select perangkat-daerah">
                            <option value="defaultValue" selected hidden>Pilih Perangkat Daerah</option>
                            <option value="perangkatDaerah1">Dinas Kesehatan</option>
                            <option value="perangkatDaerah2">Dinas Pariwisata</option>
                            <option value="perangkatDaerah3">Dinas Pendidikan </option>
                        </select>
                        <hr>
                    </div>
                    <hr>
                    <div class="form-check pilih-perangkat-daerah d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPerangkatDaerah" id="pilihanPerangkatDaerah1" value="option1">
                        <label class="form-check-label" for="pilihanPerangkatDaerah1">
                            Induk
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-perangkat-daerah d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPerangkatDaerah" id="pilihanPerangkatDaerah2" value="option2">
                        <label class="form-check-label" for="pilihanPerangkatDaerah2">
                            UPTD Rumah Sakit Umum Daerah ODSK
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-perangkat-daerah d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPerangkatDaerah" id="pilihanPerangkatDaerah3" value="option3">
                        <label class="form-check-label" for="pilihanPerangkatDaerah3">
                            UPTD Rumah Sakit Khusus Mata
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-perangkat-daerah d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPerangkatDaerah" id="pilihanPerangkatDaerah4" value="option4">
                        <label class="form-check-label" for="pilihanPerangkatDaerah4">
                            UPTD Rumah Sakit Jiwa Daerah
                        </label>
                    </div>
                    <hr>
                </div>
                <!-- Ini kalo KTU pilih Pusat -->
                <!-- <div class="ktu-pilih-pusat mt-3">
                    <div class="form-check pilih-pusat d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPusat" id="pilihanPusat1" value="option1">
                        <label class="form-check-label" for="pilihanPusat1">
                            Kemendagri
                        </label>
                    </div>
                    <hr>
                    <div class="form-check pilih-kab-kota d-flex align-items-center">
                        <input class="form-check-input" type="radio" name="pilihanPusat" id="pilihanPusat2" value="option2">
                        <label class="form-check-label" for="pilihanPusat2">
                            Kemenpan
                        </label>
                    </div>
                    <hr>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Selesai</button>
            </div>
        </div>
    </div>
</div>


<!-- Main Content -->
<div class="container">
    <h3 style="text-align: center ;" class="headingKirimSurat">Kirim Surat</h3>
    <div class="content">

        <div class="content-form">
            <div class="form-floating nomor-agenda">
                <input name="" id="nomorAgenda" cols="30" rows="10" placeholder="Nomor Agenda" class="form-control"></input>
                <label for="nomorAgenda">Nomor Agenda</label>
            </div>
            <div class="form-jenis-surat">
                <select name="" id="jenisSurat" class="form-select form-select-lg">
                    <option value="" hidden selected>
                        <p>Pilih Jenis Surat</p>
                    </option>
                    <option value="">Surat</option>
                    <option value="">Undangan</option>
                    <option value="">Laporan</option>
                </select>
            </div>
            <div class="form-floating perihal">
                <textarea name="" id="perihal" cols="30" rows="10" class="form-control perihal" placeholder="Perihal"></textarea>
                <label for="perihal">Perihal</label>
            </div>
            <a class="btn tambah-penerima" data-bs-target="#modalTambahPenerima" data-bs-toggle="modal">
                <img src="<?= base_url('assets/img/Plus.svg') ?>" alt="">
                <p>Tambah Penerima</p>
            </a>
        </div>
        <div id="liveAlertPlaceholder" style="width: 40%;"></div>

        <div class="bagian-bawah">
            <div class="input-file">
                <!-- <label for="" class=""><b>Pilih File</b></label> -->
                <input class="form-control form-control-lg" name="nama_file" id="nama_file" type="file" accept="application/pdf" value="<?= set_value('nama_file') ?>" multiple>
            </div>
            <div class="btn-custom submit">
                <button type="submit" class="btn btn-danger" style="width: 230px; height: 55px; font-size: 25px;" id="liveAlertBtnKirim"><strong>Kirim</strong>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

    const alert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div style="color: black; font-weight: 500;">${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
    }

    const alertTrigger = document.getElementById('liveAlertBtnKirim')
    if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
            alert('Surat Berhasil Dikirim!', 'success')
        })
    }
</script>



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

    /* .form-jenis-surat select {
        font-size: 15px;
    } */

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

    .bar-pilih {
        background: rgba(255, 255, 255, 0.6);
        position: relative;
        border-radius: 8px;
        height: 50px;
        font-size: 20px;
        margin: 0;
        font-weight: 700;
        box-shadow:
            0px 0px 80px rgba(0, 0, 0, 0.17);
    }

    .bar-pilih a {
        text-decoration: none;
        color: black;
        position: relative;
        padding: 10px 15px;
        display: inline-block;
        z-index: 1;
        text-align: center;
        margin-left: 10px;
    }


    /* --- Animasinya--- */
    .bar-pilih a::after {
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
    }

    .bar-pilih a:hover::after {
        transform: scale(1, 1);
    }

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
        margin-left: 20px;
    }

    .heading-penerima-kab-kota label {
        font-size: 20px;
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
        font-size: 20px;
        font-weight: 500;
    }

    /* Ini styling untuk modal ketika KTU pilih prov */
    .form-select.jenis-perangkat-daerah {
        width: 40%;
        font-size: large;
    }
</style>