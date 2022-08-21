<div class="containerr mt-5 ">
    <h4>Daftar Surat Masuk</h4>


    <div class="card">
        <div class="card-body table-responsive">
            <table id="surat_masuk_user" class="table table-hover">
                <thead>
                    <tr class="table-active">

                        <th>Perihal</th>
                        <th>Jenis Surat</th>
                        <th>No Agenda</th>
                        <th>Nama File</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal untuk detail surat-->
<div class="modal fade" id="modal-detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Detail Surat</h4>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body table-responsive">
                <div class="row-custom gap-5">
                    <!-- Daftar isi detail surat -->
                    <table class="table no-margin ">
                        <tbody>
                            <tr>
                                <th>Jenis surat :</th>
                                <td>
                                    <span id="Jenis_surat"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>No Agenda :</th>
                                <td>
                                    <span id="No_agenda"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Nama File :</th>
                                <td>
                                    <span id="Nama_file"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Perihal :</th>
                                <td>
                                    <span id="Perihal"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Lampiran Surat dalam bentuk dokumen -->
                    <div class="col-right form-hover">
                        <label for="lampiran-surat-kotak">Lampiran Surat</label>
                        <div class="lampiran-surat-kotak">
                            <h3>PDF</h3>
                        </div>
                        <button class="btn btn-download">Download</button>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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