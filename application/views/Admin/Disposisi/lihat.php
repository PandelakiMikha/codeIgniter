<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Lihat Log</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
    </div>
    <div class="modal-body">

        <!-- Data Static -->
        <?php
        if (!empty($log)) {
            foreach ($log as $s) {
        ?>
                <?php if ($user['role_id'] == 1) : ?>
                    <?php if ($s->is_dispo == 'false') : ?>
                        <h5 class="editBy">Surat berada pada KTU</h5>
                    <?php elseif ($s->is_dispo == 'true') : ?>
                        <?php if ($s->is_dispo_karo == 'true') : ?>
                            <h5 class="editBy">Sedang ditindaklanjuti oleh Kabag <?= $s->penerima_dispo ?></h5>
                        <?php elseif ($s->is_dispo_kabag == 'false') : ?>
                            <h5 class="editBy">Menunggu disposi Kabag</h5>
                        <?php endif ?>
                    <?php endif ?>
                <?php endif ?>
        <?php
            }
        }
        ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
    </div>
</div>