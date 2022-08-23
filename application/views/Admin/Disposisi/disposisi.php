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
                                                <?php if ($s->is_dispo_karo == 'true') : ?>
                                                    <?php if ($user['role_id'] == 1) : ?>
                                                        <div>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#belumDispo">
                                                                <i class="bi bi-check-circle"></i>Disposisi
                                                            </button>
                                                        </div>
                                                    <?php elseif ($user['role_id'] == 2) : ?>
                                                        <div>
                                                            <button type="button" class="btn btn-danger" id="pushDispoKabag" data-idnya="<?= $s->id; ?>" data-bs-toggle="modal" data-bs-target="#modalKabag">
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
                                                <?php elseif ($s->is_dispo_kabag == 'true') : ?>
                                                    <?php if ($user['role_id'] == 2) : ?>
                                                        <div>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#belumDispo">
                                                                <i class="bi bi-check-circle"></i>Disposisi
                                                            </button>
                                                        </div>
                                                    <?php endif ?>
                                                <?php elseif ($user['role_id'] == 2 || $user['role_id'] == 3) : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#belumDispo">
                                                            <i class="bi bi-check-circle"></i>Disposisi
                                                        </button>
                                                    </div>
                                                <?php else : ?>
                                                    <?php if ($user['role_id'] == 1) : ?>
                                                        <div>
                                                            <button type="button" class="btn btn-danger" id="pushDispoKaro" data-idnya="<?= $s->id; ?>" data-bs-toggle="modal" data-bs-target="#modalKaro">
                                                                <i class="bi bi-check-circle"></i>Disposisi
                                                            </button>
                                                        </div>
                                                    <?php endif ?>
                                                <?php endif ?>
                                            <?php elseif ($s->is_dispo == 'false' && $user['role_id'] == 3) : ?>
                                                <?php if ($s->is_dispo_karo == 'true' || $s->is_dispo_kabag == 'true') : ?>
                                                    <div>
                                                        <button type="button" class="btn btn-danger" id="pushDispoKtu1" data-idnya="<?= $s->id; ?>" data-bs-toggle="modal" data-bs-target="#modalKtu1">
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
                                            <button type="button" id="details" class="btn btn-primary" data-idnya="<?= $s->id; ?>" data-suratdari="<?= $s->suratDari; ?>" data-nosurat="<?= $s->noSurat; ?>" data-tglsurat="<?= $s->tglSurat; ?>" data-diterima="<?= $s->diterima; ?>" data-tanggalkeluar="<?= $s->tanggalKeluar; ?>" data-noagenda="<?= $s->noAgenda; ?>" data-sifatsurat="<?= $s->sifatSurat; ?>" data-status="<?= $s->status; ?>" data-hal="<?= $s->hal; ?>" data-tujuankaro="<?= $s->tujuan_karo; ?>" data-mengharapkan="<?= $s->mengharapkan; ?>" data-catkaro="<?= $s->catKaro; ?>" data-tujuankabag="<?= $s->tujuan_kabag; ?>" data-catkabag="<?= $s->catKabag; ?>" data-tujuanktu="<?= $s->tujuan_ktu; ?>" data-catktu="<?= $s->catKtu1; ?>" data-bs-toggle="modal" data-bs-target="#modalDetail">
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
<div class="modal fade" id="modalKaro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKaro" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
            </div>
            <form role="form" id="push_dispo_karo" action="<?php echo base_url(); ?>karoo/push_dispo_karo" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="form-select" class="label-bold">Tujuan</label>
                        <select name="tujuan" class="form-select" required>
                            <option value="" hidden>Pilih Tujuan</option>
                            <?php
                            if (!empty($user_biro)) {
                                foreach ($user_biro as $uB) {
                            ?>
                                    <option value="<?= $uB->email ?>"><?= $uB->name ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="form-select" class="label-bold">Mengharapkan</label>
                        <select name="mengharapkan" required class="form-select">
                            <option value="" hidden>Pilih Pesan</option>
                            <option value="Buat Tanggapan dan Saran">Buat Tanggapan dan Saran</option>
                            <option value="Proses Lebih Lanjut">Proses Lebih Lanjut</option>
                            <option value="Laporkan? Menghadap Saya">Laporkan? Menghadap Saya</option>
                            <option value="Monitor Untuk Masukan">Monitor Untuk Masukan</option>
                            <option value="Kordinasi">Kordinasi</option>
                            <option value="Untuk Minta Perhatian">Untuk Minta Perhatian</option>
                        </select>
                    </div>
                    <div class="input-groupp">
                        <label for="form-control" class="label-bold">Catatan Kepala Biro</label>
                        <input type="hidden" required="required" id="dKaro_id" name="dKaro_id" value="">
                        <textarea class="form-control" required="required" id="catKaro" name="catKaro" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                    </div>
                    <div class="ttd-karo">
                        <!-- <div class="ttd-karo-content"> -->
                        <button class="btn-ttd-karo" id="btnTTDKaro" onclick="clicked()" value="hide/show">
                            <label for="btn-ttd-karo">Tekan untuk TTD</label>
                            <img src="<?= base_url('assets/img/ttd.jpg') ?> " id="ttdImg">
                        </button>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Untuk Button Disposisi Kabag-->
<div class="modal fade" id="modalKabag" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKabag" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" id="push_dispo_kabag" action="<?php echo base_url(); ?>kabag/push_dispo_kabag" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="form-select" class="label-bold">Tujuan</label>
                        <select name="tujuan" required class="form-select">
                            <option value="" hidden>Pilih Tujuan</option>
                            <?php
                            if (!empty($user_biro)) {
                                foreach ($user_biro as $uB) {
                            ?>
                                    <option value="<?= $uB->email ?>"><?= $uB->name ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-groupp">
                        <label class="label-bold">Catatan Kepala Bagian</label>
                        <input type="hidden" required="required" id="dKabag_id" name="dKabag_id" value="">
                        <textarea class="form-control" name="catKabag" id="catKabag" required="required" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal untuk Button Disposisi KTU Pertama-->
<div class="modal fade" tabindex="-1" id="modalKtu" role="dialog" data-bs-backdrop="static" aria-labelledby="modalKtu" aria-hidden="true">
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
                                <option value="" hidden selected>Status</option>
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
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!--Modal Untuk Button Disposisi KTU ke-2 -->
<div class="modal fade" id="modalKtu1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKtu1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Formulir Disposisi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form role="form" id="push_dispo_ktu1" action="<?php echo base_url(); ?>ktu/push_dispo_ktu1" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="form-select" class="label-bold">Tujuan</label>
                        <select name="tujuan" class="form-select" required>
                            <option value="" hidden>Pilih Tujuan</option>
                            <?php
                            if (!empty($user_biro)) {
                                foreach ($user_biro as $uB) {
                            ?>
                                    <option value="<?= $uB->email ?>"><?= $uB->name ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-groupp">
                        <label class="label-bold">Catatan KTU/Jabfung Ahli Muda</label>
                        <input type="hidden" required="required" id="dKtu1_id" name="dKtu1_id" value="">
                        <textarea class="form-control" id="catKtu1" name="catKtu1" required="required" aria-label="With textarea" placeholder="Isi catatan disini."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Untuk Button Detail -->
<div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDetail" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class=" modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Detail Surat</h4>
            </div>
            <div class="modal-body">
                <div class="row-custom gap-5">
                    <!-- Daftar isi detail surat -->
                    <div class="col-left">
                        <!-- <span id="detail_id" name="detail_id">hai</span> -->
                        <div class="item">
                            <p class="label-bold">Surat dari: </p>
                            <p id="surat_dari_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Nomor Surat: </p>
                            <p id="no_surat_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tanggal Surat: </p>
                            <p id="tgl_surat_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Diterima Tanggal: </p>
                            <p id="diterima_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tanggal Keluar: </p>
                            <p id="tgl_keluar_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Nomor Agenda: </p>
                            <p id="no_agenda_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Sifat: </p>
                            <p id="sifat_surat_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Status: </p>
                            <p id="status_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Hal: </p>
                            <p id="hal_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tujuan dari Karo: </p>
                            <p id="tujuan_karo_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Mengharapkan: </p>
                            <p id="mengharapkan_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Cat Karo: </p>
                            <p id="cat_karo_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Ttd Karo: </p>
                            <p>Sign </p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tujuan dari Kabag: </p>
                            <p id="tujuan_kabag_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Cat Kabag: </p>
                            <p id="cat_kabag_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Tujuan dari JAM: </p>
                            <p id="tujaun_ktu_id"></p>
                        </div>
                        <div class="item">
                            <p class="label-bold">Cat Jam: </p>
                            <p id="cat_ktu_id"></p>
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


<script>
    function clicked() {
        if (ttdImg == 1) {
            document.getElementById("ttdImg").style.display = "inline";
            return ttdImg = 0;
        } else {
            document.getElementById("ttdImg").style.display = "none";
            return ttdImg = 1;
        }
    }
</script>
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

    .btn-ttd-karo {
        /* border: 1px solid black; */
        height: 210px;
        width: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: transparent !important; */
    }

    .ttd-karo img {
        position: absolute;
        height: 200px;
        width: 200px;
    }

    .ttd-karo {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .ttd-karo-content {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>