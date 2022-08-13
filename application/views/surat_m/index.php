<div class="col-lg-6">
    <h1 class="display-5 text-center">Tabel Data Belanja</h1>
    <table class="table tg">
        <thead>
            <tr>
                <th class="tg-m1tb">No.</th>
                <th class="tg-m1tb">Tanggal</th>
                <th class="tg-m1tb">Uraian</th>
                <th class="tg-m1tb">Jumlah</th>
                <th class="tg-m1tb">Keterangan</th>
                <th class="tg-m1tb">Aksi</th>
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
                        <td class="tg-baqh"><?= $i; ?></td>
                        <td class="tg-baqh"><?= $isi->sender; ?></td>
                        <td class="tg-baqh"><?= $isi->type; ?></td>
                        <td class="tg-baqh"><?= $isi->regarding; ?></td>
                        <td class="tg-baqh"><?= $isi->date_sended; ?></td>
                        <td class="tg-baqh">
                            <button class="btn btn-primary btn-rounded" id="tombolEdit" data-idnya="<?= $isi->id; ?>" data-toggle="modal" data-target="#editModal">Edit</button>
                            <button class="btn btn-danger btn-rounded" id="tombolHapus" data-idnya="<?= $isi->id; ?>">Hapus</button>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>