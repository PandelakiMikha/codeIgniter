<table id="surat" class="table table-hover">
    <thead class="table-active">
        <tr>
            <th>Pingirim</th>
            <th>Jenis Surat</th>
            <th>Perihal</th>
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
                    <td class="tg-baqh"><?= $s->date_sended; ?></td>
                    <td class="tg-baqh"><a class="btn btn-danger btn-sm" href="<?= base_url(); ?>ktu/download/<?= $s->id; ?> "><i class="bi bi-download me-1"></i>Download</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>