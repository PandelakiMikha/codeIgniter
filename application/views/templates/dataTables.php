<div class="col-sm-12 container mt-5 ">
    <h3>Data Tables</h3>
    <div class="card">
        <div class="card-body table-responsive-sm">
            <table id="example" class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Pingirim</th>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Masuk</th>
                        <th class="hala"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dinas Kesehatan</td>
                        <td>Laporan</td>
                        <td>Laporan Kasus Covid</td>
                        <td>2012-12-12</td>
                        <td class="d-flex">
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                                    Lihat
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Disposisi
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Detail
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Dinas Kesehatan</td>
                        <td>Surat</td>
                        <td>Laporan Kasus Covid</td>
                        <td>2012-12-12</td>
                        <td class="d-flex">
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                                    Lihat
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Disposisi
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Detail
                                </button>
                            </div>
                        </td>
                    </tr>
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
    .col-sm-12 {
        /* box-sizing: border-box; */
    }

    .hala {
        width: 300px;
    }

    .d-flex {
        /* display: flex; */
        justify-content: space-around;
        width: 300px;
    }

    .card .table tbody tr td {
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>