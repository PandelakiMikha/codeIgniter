<div class="containerr mt-5 ">
    <h4>Daftar Surat</h4>
    <div class="card">
        <div class="card-body table-responsive">
            <table id="surat" class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Masuk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($surat)) {
                        $i = 0;
                        foreach ($surat as $s) {
                            $i++;
                    ?>
                            <tr>
                                <td class="tg-baqh"><?= $s->type; ?></td>
                                <td class="tg-baqh"><?= $s->regarding; ?></td>
                                <td class="tg-baqh"><?= $s->date_sended; ?></td>
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



<style>
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

    /* .table {
        background-color: #FFEBEB;
    } */

    .cuss {
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
    }

    /* .cuss .btn .bi-eye {
        color: #111827;
    } */

    /* table tbody td {
        display: flex;
        justify-content: space-around;
    } */
</style>