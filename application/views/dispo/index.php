<div class="containerr mt-5 ">
    <h4>Daftar Surat</h4>
    <div class="card">
        <div class="card-body table-responsive">
            <table id="dispo" class="table table-hover1">
                <thead class="table-light">
                    <tr>
                        <th>Pingirim</th>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Masuk</th>
                        <th class="hala"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

<!-- Modals -->
<!-- Modal Untuk Button Lihat -->
<div class="modal fade" id="staticBackdropLihat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Lihat Log</h4>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <!-- Data Static -->
                <h5 class="editBy">Di edit oleh Kabag Tatalaksana</h5>
                <p class="editByDate">20 Juli 2022</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!--**** List Modal untuk Button Disposisi ****-->

<!--Modal Untuk Button Disposisi Karo -->
<div class="modal fade" id="staticBackdropDispo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="form-select" class="label-bold">Tujuan</label>
                    <select name="form-select" class="form-select">
                        <option value="pilihPenerima" hidden>Pilih Tujuan</option>
                        <option value="">Kepala Bagian Kelembagaan dan Anjab</option>
                        <option value="">Kepala Bagian Reformasi Birokrasi</option>
                        <option value="">Kepala Bagian Tatalaksana</option>
                        <option value="">Kepala sub Bagian TU Biro</option>
                        <option value="">Bendahara</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="form-select" class="label-bold">Mengharapkan</label>
                    <select name="form-select" class="form-select">
                        <option value="pilihPesan" hidden>Pilih Pesan</option>
                        <option value="">Buat Tanggapan dan Saran</option>
                        <option value="">Proses Lebih Lanjut</option>
                        <option value="">Laporkan? Menghadap Saya</option>
                        <option value="">Monitor Untuk Masukan</option>
                        <option value="">Kordinasi</option>
                        <option value="">Untuk Minta Perhatian</option>
                    </select>
                </div>
                <div class="input-groupp">
                    <label for="form-control" class="label-bold">Catatan Kepala Biro</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Button Disposisi KTU -->
<!-- <div class="modal fade" id="staticBackdropDispoKTU" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
            </div>
            <div class="modal-body">
                <div class="row g-2 d-flex align-items-center justify-content-center gap-3">
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control " placeholder="Surat Dari" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Surat dari</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Tanggal Keluar" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Tanggal Keluar</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Nomor Surat" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Nomor Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Nomor Agenda" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Nomor Agenda</label>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Tanggal Surat" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Tanggal Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Sifat Surat" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Sifat Surat</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Diterima Tanggal" id="floatingInput">
                            <label for="floatingInput" class="label-bold">Diterima Tanggal</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select form-select-lg " aria-label="pilihStatus">
                            <option hidden selected>Status</option>
                            <option value="1">Segera</option>
                            <option value="2">Sangat Segera</option>
                            <option value="3">Rahasia</option>
                        </select>
                    </div>
                    <div class="col-md-10">
                        <div class="form-floating w-100">
                            <textarea class="form-control" placeholder="hal" id="floatingTextarea" id="Hal" name="Hal"></textarea>
                            <label for="floatingTextarea" class="label-bold">Hal</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>

        </div>
    </div>
</div> -->

<!--Modal Untuk Button Disposisi Kabag -->
<!-- <div class="modal fade" id="staticBackdropDispoKabag" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="form-select" class="label-bold">Tujuan</label>
                    <select name="form-select" class="form-select">
                        <option value="pilihPenerima" hidden>Pilih Tujuan</option>
                        <option value="KTU">KTU</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Jabfung1">Jabfung1</option>
                        <option value="Jabfung2">Jabfung2</option>
                        <option value="Jabfung3">Jabfung3</option>
                    </select>
                </div>
                <div class="input-groupp">
                    <label class="label-bold">Catatan Kepala Bagian</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>
        </div>
    </div>
</div> -->

<!--Modal Untuk Button Disposisi Jabfung -->
<!-- <div class="modal fade" id="staticBackdropDispoJabfung" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="form-select" class="label-bold">Tujuan</label>
                    <select name="form-select" class="form-select">
                        <option value="pilihPenerima" hidden>Pilih Tujuan</option>
                        <option value="Jabfung1">Jabfung1</option>
                        <option value="Jabfung2">Jabfung2</option>
                        <option value="Jabfung3">Jabfung3</option>
                    </select>
                </div>
                <div class="input-groupp">
                    <label class="label-bold">Catatan KTU/Jabfung Ahli Muda</label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>
        </div>
    </div>
</div> -->
<!--**** End of list modal untuk button Disposisi ****-->

<!--Modal Untuk Button Detail -->
<div class="modal fade" id="staticBackdropDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Detail Surat</h4>
            </div>
            <div class="modal-body">
                <div class="row-custom gap-5">
                    <!-- Daftar isi detail surat -->
                    <div class="col-left">
                        <div class="item">
                            <p class="label-bold">Surat dari: </p>
                            <p>Dinas Kesehatan</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Nomor Surat: </p>
                            <p>1104</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tanggal Surat: </p>
                            <p>19 Juli 2022</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Diterima Tanggal: </p>
                            <p>19 Juli 2022</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tanggal Keluar: </p>
                            <p>20 Juli 2022</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Nomor Agenda: </p>
                            <p>00234</p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Sifat: </p>
                            <p>Umum</p>
                        </div>
                    </div>
                    <!-- Lampiran Surat dalam bentuk dokumen -->
                    <div class="col-right form-hover">
                        <label for="lampiran-surat-kotak">Lampiran Surat</label>
                        <div class="lampiran-surat-kotak">
                            <h3>PDF</h3>
                        </div>
                        <button class="btn btn-download">Download</button>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Content Start -->
<div class="container">
    <!-- Dropdown box -->
    <div class="dua-dropdown">
        <div class="dropdown1">
            <label for="form-select" class="label-bold">Pusat, Provinsi, Kab./Kota</label>
            <select class="form-select" aria-label="pilihPemerintahan">
                <option hidden selected>Pilih</option>
                <option value="1">Pusat</option>
                <option value="2">Provinsi</option>
                <option value="3">Kabupaten/Kota</option>
            </select>
        </div>
        <div class="dropdown2">
            <label for="form-select" class="label-bold">Department</label>
            <select class="form-select" aria-label="pilihDepartment">
                <option hidden selected>Pilih Department</option>
                <option value="Kota Manado">Kota Manado</option>
                <option value="Kota Bitung">Kota Bitung</option>
                <option value="Kota Tomohon">Kota Tomohon</option>
            </select>
        </div>
    </div>
    <!-- Table Start -->
    <table id="dispo" class="table table-hover">
        <!-- Head -->
        <thead>
            <tr class="table-active">
                <th>Pengirim</th>
                <th>Jenis Surat</th>
                <th>Perihal</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
                <!-- <th class="hala">fadf</th> -->
            </tr>
        </thead>
        <!-- Body -->
        <tbody>
        </tbody>
    </table>
    <!-- End of Table -->
</div>
<!-- Content End -->