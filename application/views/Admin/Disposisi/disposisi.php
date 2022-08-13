<div class="containerr mt-5 ">
    <h4>Daftar Surat</h4>
    <div class="card">
        <div class="card-body table-responsive">
            <table id="surat" class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Pingirim</th>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
                        <th>Keterangan</th>
                        <th>Tanggal Masuk</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($belanja)) {
                        $i = 0;
                        foreach ($belanja as $isi) {
                            $i++;
                    ?>
                            <tr>
                                <td class="tg-baqh"><?= $isi->sender; ?></td>
                                <td class="tg-baqh"><?= $isi->type; ?></td>
                                <td class="tg-baqh"><?= $isi->regarding; ?></td>
                                <td class="tg-baqh"><?= $isi->ket; ?></td>
                                <td class="tg-baqh"><?= $isi->date_sended; ?></td>
                                <td>
                                    <div class="cuss">
                                        <div class="me-4">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat">
                                                <i class="bi bi-eye"></i>Log
                                            </button>
                                        </div>
                                        <?php if ($user['role_id'] == 4) : ?>
                                        <?php elseif ($user['role_id'] != 4) : ?>
                                            <div>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispo">
                                                    <i class="bi bi-check-circle"></i>Disposisi
                                                </button>
                                            </div>
                                        <?php endif ?>
                                        <div class="ms-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropDetail">
                                                <i class="bi bi-file-earmark-text"></i>Detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk button lihat -->
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


<style>
    /* .form-group {
        margin-left: -12px;
        margin-top: 10px;
    } */

    .containerr {
        box-sizing: border-box;
        /* margin: auto; */
        flex-grow: 1;
        margin-left: 30px;
        margin-right: 30px;
        /* margin-top: 100px !important; */
        /* background-color: aliceblue; */
    }

    /* .hala {
        width: 300px;
    } */

    /* .cuss {
        display: flex;
        justify-content: center;
    }

    .cuss .middle {
        margin-right: 28px;
        margin-left: 28px;
    }

    .cuss .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
    }

    .cuss .btn i {
        margin-right: 6px;
        box-sizing: border-box;
    } */

    /* .cuss .btn .bi-eye {
        color: #111827;
    } */

    /* table tbody td {
        display: flex;
        justify-content: space-around;
    } */
</style>