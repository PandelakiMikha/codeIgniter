<!-- <div class="modals modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable"> -->
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
                    <p class="label-bold">Surat dari</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="surat_dari_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Nomor Surat</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="no_surat_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Tanggal Surat</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="tgl_surat_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Diterima Tanggal</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="diterima_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Tanggal Keluar</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="tgl_keluar_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Nomor Agenda</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="no_agenda_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Sifat</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="sifat_surat_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Status</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="status_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Hal</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="hal_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Tujuan dari Karo</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="tujuan_karo_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Mengharapkan</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="mengharapkan_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Cat Karo</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="cat_karo_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Tujuan dari Kabag</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="tujuan_kabag_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Cat Kabag</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="cat_kabag_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Tujuan dari JAM</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="tujaun_ktu_id"></p>
                </div>
                <div class="item">
                    <p class="label-bold">Cat Jam</p>
                    <span class="fw-bold me-2">:</span>
                    <p id="cat_ktu_id"></p>
                </div>
            </div>
            <!-- Lampiran Surat dalam bentuk dokumen -->
            <div class="col-right">
                <div class="lampiran-kotak-wrapper ms-5">
                    <label for="lampiran-surat-kotak" class="lampiran">Lampiran Surat <?= $ttd_karo ?></label>
                    <div class="lampiran-surat-kotak">
                        <h3>PDF</h3>
                    </div>
                    <a class="btn btn-danger w-75" href="<?= base_url(); ?>download/downloadSM/<?= $id; ?> "><i class="bi bi-download me-1"></i>Download</a>
                </div>

                <?php if ($ttd_karo == 'true') : ?>
                    <div class="ttd-karo mt-4 ms-5">
                        <h6 class="fw-bolder">TTD Karo</h6>
                        <img src="<?= base_url('assets/img/ttd.jpg') ?> " id="ttdImg">
                        <h6 class="mt-2 text-center">Christodharma S. M. P. Sondakh, SH</h6>
                    </div>
                <?php elseif ($ttd_karo == 'false') : ?>
                <?php endif; ?>

                <?php if ($user['role_id'] == 4) : ?>
                    <div class="ms-4 mt-4 d-flex justify-content-center">
                        <a class="btn btn-success w-75 text-center" href="<?= base_url(); ?>jabfung/pushDone/<?= $id; ?> "><i class="bi-check-circle me-1"></i>Selesai</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
    </div>
</div>
<!-- </div> -->