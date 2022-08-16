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
                    if (!empty($surat)) {
                        foreach ($surat as $s) {
                    ?>
                            <tr>
                                <td class="tg-baqh"><?= $s->sender; ?></td>
                                <td class="tg-baqh"><?= $s->type; ?></td>
                                <td class="tg-baqh"><?= $s->regarding; ?></td>
                                <td class="tg-baqh"><?= $s->ket; ?></td>
                                <td class="tg-baqh"><?= $s->date_sended; ?></td>
                                <td>
                                    <div class="cuss">
                                        <?php if ($user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                                            <div class="me-4">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat">
                                                    <i class="bi bi-eye"></i>Log
                                                </button>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($user['role_id'] == 4) : ?>
                                            <!-- Tidah menampilkan button disposisi -->
                                        <?php elseif ($user['role_id'] != 4) : ?>
                                            <?php if ($s->is_dispo == 'false' && $user['role_id'] != 3) : ?>
                                                <div>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#belumDispo">
                                                        <i class="bi bi-check-circle"></i>Disposisi
                                                    </button>
                                                </div>
                                            <?php elseif ($s->is_dispo == 'true') : ?>
                                                <?php if ($user['role_id'] == 1) : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispo">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php elseif ($user['role_id'] == 2) : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispoKabag">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php elseif ($user['role_id'] == 3) : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#belumDispo">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php endif ?>
                                            <?php elseif ($s->is_dispo == 'false' && $user['role_id'] == 3) : ?>
                                                <?php if ($s->is_dispo_karo == 'true' || $s->is_dispo_kabag == 'true') : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropDispoKTU2">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php else : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" id="pushDispoKtu" data-idnya="<?= $s->id; ?>" data-bs-toggle="modal" data-bs-target="#modalKtu">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php endif ?>
                                            <?php endif ?>
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
                <?php foreach ($surat as $s) { ?>
                    <?php if ($user['role_id'] == 1) : ?>
                        <?php if ($s->is_dispo == 'false') : ?>
                            <h5 class="editBy">Menunggu disposi KTU</h5>
                            <?php break; ?>
                        <?php elseif ($s->is_dispo == 'true') : ?>
                            <?php if ($s->is_dispo_karo == 'true' || $s->is_dispo_kabag == 'true' || $s->is_dispo_ktu == 'true') : ?>
                                <h5 class="editBy">Sedang ditindaklanjuti oleh Jabfung</h5>
                                <?php break; ?>
                            <?php elseif ($s->is_dispo_kabag == 'false') : ?>
                                <h5 class="editBy">Menunggu disposi Kabag</h5>
                                <?php break; ?>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endif ?>
                <?php
                } ?>
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
                    <textarea class="form-control" required="required" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>
        </div>
    </div>
</div>

<!--Modal Untuk Button Disposisi Kabag-->
<div class="modal fade" id="staticBackdropDispoKabag" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <textarea class="form-control" required="required" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="button-kirim">Kirim</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk Button Disposisi KTU Pertama-->
<div class="modal fade" id="modalKtu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKtu" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
            </div>
            <form role="form" id="push_dispo_ktu" action="<?php echo base_url(); ?>ktu/push_dispo_ktu" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row g-2 d-flex align-items-center justify-content-center gap-3">
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="hidden" required="required" id="dKtu_id" name="dKtu_id" value="">
                                <input type="text" class="form-control" required="required" placeholder="Surat Dari" id="suratDari" name="suratDari">
                                <label for="suratDari" class="label-bold">Surat dari</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="date" class="form-control" required="required" placeholder="Tanggal Keluar" id="tanggalKeluar" name="tanggalKeluar">
                                <label for="tanggalKeluar" class="label-bold">Tanggal Keluar</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" required="required" placeholder="Nomor Surat" id="noSurat" name="noSurat">
                                <label for="noSurat" class="label-bold">Nomor Surat</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" required="required" placeholder="Nomor Agenda" id="noAgenda" name="noAgenda">
                                <label for="noAgenda" class="label-bold">Nomor Agenda</label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="date" class="form-control" required="required" placeholder="Tanggal Surat" id="tglSurat" name="tglSurat">
                                <label for="tglSurat" class="label-bold">Tanggal Surat</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" required="required" placeholder="Sifat Surat" id="sifatSurat" name="sifatSurat">
                                <label for="sifatSurat" class="label-bold">Sifat Surat</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="date" class="form-control" required="required" placeholder="Diterima Tanggal" id="diterima" name="diterima">
                                <label for="diterima" class="label-bold">Diterima Tanggal</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <select class="form-select form-select-lg" required="required" name="status" aria-label="pilihStatus">
                                <option hidden selected>Status</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Segera">Sangat Segera</option>
                                <option value="Rahasia">Rahasia</option>
                            </select>
                        </div>
                        <div class="col-md-10">
                            <div class="form-floating w-100">
                                <textarea class="form-control" required="required" placeholder="hal" id="hal" name="hal"></textarea>
                                <label for="hal" class="label-bold">Hal</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" value="tambahkan">Kirim</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!--Modal Untuk Button Disposisi KTU ke-2 -->
<div class="modal fade" id="staticBackdropDispoKTU2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <textarea class="form-control" required="required" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
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

<!-- Modal untuk massage belum di disposisi -->
<!-- Modal -->
<div class="modal fade" id="belumDispo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Maaf...</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Surat belum di disposisi
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