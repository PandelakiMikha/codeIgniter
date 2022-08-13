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
    <table id="lampiranArsip" class="table table-hover">
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
</div>
<!-- End of Table -->


<style>
    .cuss-detail {
        margin-left: 24px;
    }
</style>