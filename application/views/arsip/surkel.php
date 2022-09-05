<table id="surat" class="table table-hover">
    <thead class="table-active">
        <tr>
            <th>No. Agenda</th>
            <th>Tujuan</th>
            <th>Jenis Surat</th>
            <th>Perihal</th>
            <th>Keterangan</th>
            <th>Tanggal Keluar</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($surat)) {
            foreach ($surat as $s) {
        ?>
                <tr>
                    <td class="tg-baqh"><?= $s->nomorAgenda; ?></td>
                    <td class="tg-baqh"><?= $s->pilihTujuan; ?></td>
                    <td class="tg-baqh"><?= $s->jenisSurat; ?></td>
                    <td class="tg-baqh"><?= $s->perihal; ?></td>
                    <td class="tg-baqh"><?= $s->keterangan; ?></td>
                    <td class="tg-baqh"><?= $s->date_sended; ?></td>
                    <td class="tg-baqh"><a class="btn btn-danger btn-sm" href="<?= base_url(); ?>download/downloadSK/<?= $s->id; ?> "><i class="bi bi-download me-1"></i>Download</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>