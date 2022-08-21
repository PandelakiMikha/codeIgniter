<div class="container">
    <form id="my-form-new" class="row form-1 g-3" action="<?= base_url('User/kirim_surat') ?>" method="POST">

        <!-- input data user -->
        <div class="col-md-4">
            <label for="sender" class="form-label"><b>Nama Pengguna Anda</b></label>
            <input type="text" class="form-control" name="sender" id="sender" value="<?= $user['name'] ?>">
            <small class="text-danger"><?= form_error('type'); ?></small>
        </div>

        <div class="col-md-4">
            <label for="jenis_surat" class="form-label"><b>Jenis Surat</b></label>
            <select name="type" id="jenis_surat" class="form-select" value="<?= set_value('type') ?>">
                <?php foreach ($jenis_surat as $value) : ?>
                    <option value="" hidden>Pilih..</option>
                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                <?php endforeach ?>
            </select>
            <small class="text-danger"><?= form_error('type'); ?></small>
        </div>
        <!-- bagian text input -->
        <div class="col-md-4">
            <label for="lainya" class="form-label"><b>Tipe Surat Lainya</b></label>
            <input type="text" class="form-control" name="type" id="lainya" placeholder="Masukan Tipe Surat Lainya" value="<?= set_value('type') ?>">
            <small class="text-danger"><?= form_error('type'); ?></small>
        </div>

        <!-- date picker -->
        <div class="col-md-4">
            <label for="date" class="form-label"><b>Waktu Mengirim</b></label>
            <input class="form-control" type="date" name="date_sended" id="date_sended" value="<?= set_value('date_sended') ?>">
            <small class="text-danger"><?= form_error('date_sended'); ?></small>
        </div>

        <div class="col-12">
            <label for="perihal" class="form-label"><b>Perihal</b></label>
            <input type="text" class="form-control" name="regarding" id="regarding" placeholder="Masukan Perihal yang Anda Inginkan" value="<?= set_value('regarding') ?>">
            <small class="text-danger"><?= form_error('regarding'); ?></small>
        </div>

        <!-- pilih file -->

        <!-- <?php if ($error !== null) : echo $error;
                endif; ?> -->
        <!-- <?php echo $error; ?> -->
        <!-- <?php echo form_open_multipart('User/kirim_surat'); ?> -->
        <div class="col-md-4 mb-3 mt-3">
            <label for="nama_file" class="form-label"><b>Pilih File</b></label>
            <input class="form-control form-control-sm" name="File_name" id="File_name" type="file" accept="application/pdf" value="" multiple />
            <small class="text-danger"><?= form_error('File_name'); ?></small>
        </div>

        <!-- upload file -->
        <!-- <div class="col-md-4">
    <input class="btn btn-primary mt-4" type="submit" id="upload" value="upload">
    <input type="submit" value="upload" />

</div> -->

        <div class=" d-flex justify-content-center mt-5">
            <button type="reset" class="btn bg-body  d-flex align-items-center justify-content-center" style="width: 150px; height: 40px; font-size: 20px;" name="save" value="Save Data"><span class="Btn_reset"><i class="bi bi-trash"></i>Hapus</span></button>

            <!-- <button type="submit" id="btn-submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 150px; height: 40px; font-size: 20px;" name="save" value="Save Data"><i class="bi bi-send"></i><strong>Kirim</strong></button> -->

            <button type="submit" value="KIRIM" name="btn-submit" onclick="pilih()" onkeyup="success()" id="button-submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 150px; height: 40px; font-size: 20px;"><i class="bi bi-send"></i><strong>Kirim</strong></button>

            <!-- <input type="submit" value="KIRIM" name="btn-submit" onkeyup="success()" id="button-submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 150px; height: 40px; font-size: 20px;"> -->
        </div>

        <!-- <?= form_close(); ?> -->
    </form>
</div>