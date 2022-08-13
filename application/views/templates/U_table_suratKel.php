<div class="containerr mt-5 ">
    <h4>Daftar Surat Keluar</h4>
    <!-- <div class="d-flex w-50 my-2 ">
        <select class="form-select me-3 w-50" id="daerah" name="daerah">
            <?php foreach ($data_daerah as $value) : ?>
                <option value="" hidden>Pilih Daerah</option>
                <option value="<?= $value->id ?>"><?= $value->name ?></option>
            <?php endforeach ?>
        </select>
        <select class="form-select w-50" aria-label="Default select example" id="perangkat_daerah" name="perangkat_daerah">
        </select>
    </div> -->

    <!-- <div class="form-group">
        <label for="LastName" class="col-sm-2 control-label"></label>
        <div class="col-sm-4">
            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
        </div>
    </div> -->


    <div class="card">
        <div class="card-body table-responsive">
            <table id="surat_kel_user" class="table table-hover">
                <thead class="table-light">
                    <tr class="table-active">
                        <th>No</th>
                        <th>Perihal</th>
                        <th>Nama File</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Keluar</th>
                        <!-- <th>Action</th> -->

                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($h->result() as $row) {
                    ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="td-2"><?php echo $row->regarding; ?>
                            </td>
                            <td class="td-3"><?php echo $row->File_name; ?>
                            </td>
                            <td class="td-4"><?php echo $row->type; ?>
                            </td>
                            <td class="td-5"><?php echo $row->date_sended; ?>
                            </td>
                        </tr>
                        <!-- <td>Action</td> -->
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
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