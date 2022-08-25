<center>
    <div class="card-upload" data-aos="zoom-in">
        <div class="card col-4 card-xl card-1 rounded">
            <div class="card-body">
                <h5 class="card-title"><strong> Kirim Surat Anda Berhasil!!</strong></h5>
                <br>
                <img src="https://cdn-icons.flaticon.com/png/128/4436/premium/4436481.png?token=exp=1661254220~hmac=622d46a909b80ea974382148086f118b" class="card-img-top" alt="centang">
                <p class="card-text">Surat Anda Akan Segera di Proses..</p>
                <br>
                <?php if ($user['role_id'] == 3) : ?>
                    <a href="<?= base_url('ktu/surat_keluar') ?>" class="btn btn-primary">Kembali</a>
                <?php else : ?>
                    <a href="<?= base_url('User/kirim_surat') ?>" class="btn btn-primary">Kembali</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</center>

<style>
    .card-upload {
        margin-top: 15%;
    }

    .card-img-top {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }
</style>