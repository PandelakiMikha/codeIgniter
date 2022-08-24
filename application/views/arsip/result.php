<table id="surat" class="table table-hover">
    <thead class="table-active">
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
                        <div class="me-4">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-placement="center" data-bs-target="#staticBackdropLihat">
                                <i class="bi bi-cloud-arrow-down me-2"></i>Download File
                            </button>
                        </div>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>