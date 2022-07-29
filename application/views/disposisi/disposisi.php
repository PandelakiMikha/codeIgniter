<!-- Catatan
        - Isi url untuk button edit
        - Isi url untuk button delete
        - 

        - https://www.youtube.com/watch?v=oxWv74OI6xA (menit 13, datatables tutorial)

 -->


<div class="container">
    <!-- Dropdown box -->
    <div class="dua-aksi">
        <div class="dropdown1">
            <label for="form-select">Pusat, Provinsi, Kab./Kota</label>
            <select class="form-select" aria-label="pilihPemerintahan">
                <option hidden selected>Pilih</option>
                <option value="Kota Manado">Pusat</option>
                <option value="Kota Bitung">Provinsi</option>
                <option value="Kota Tomohon">Kabupaten/Kota</option>
            </select>
        </div>
        <div class="dropdown2">
            <label for="form-select">Department</label>
            <select class="form-select" aria-label="pilihDepartment">
                <option hidden selected>Pilih Department</option>
                <option value="Kota Manado">Kota Manado</option>
                <option value="Kota Bitung">Kota Bitung</option>
                <option value="Kota Tomohon">Kota Tomohon</option>
            </select>
        </div>
    </div>
    <!-- Table -->
    <div class="table-daftar-dispo ">
        <table id="table-dispo" class="table table-hover" style="width:100%;">
            <!-- Headline table -->
            <thead>
                <tr>
                    <th>Pengirim</th>
                    <th>Jenis Surat</th>
                    <th>Perihal</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <!-- Content table -->
            <tbody>
                <tr>
                    <td>Kabupaten Minahasa</td>
                    <td>laporan</td>
                    <td>Laporan Pembangunan Jalan Tol</td>
                    <td>22 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Dinas Kesehatan</td>
                    <td>Surat</td>
                    <td>Surat Khusus Kepala Biro</td>
                    <td>12 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kota Bitung</td>
                    <td>Laporan</td>
                    <td>laporan Kasus Covid-19</td>
                    <td>15 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#000000;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>Kabupaten Minahasa</td>
                    <td>laporan</td>
                    <td>Laporan Pembangunan Jalan Tol</td>
                    <td>22 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Dinas Kesehatan</td>
                    <td>Surat</td>
                    <td>Surat Khusus Kepala Biro</td>
                    <td>12 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kota Bitung</td>
                    <td>Laporan</td>
                    <td>laporan Kasus Covid-19</td>
                    <td>15 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#000000;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>Kabupaten Minahasa</td>
                    <td>laporan</td>
                    <td>Laporan Pembangunan Jalan Tol</td>
                    <td>22 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Dinas Kesehatan</td>
                    <td>Surat</td>
                    <td>Surat Khusus Kepala Biro</td>
                    <td>12 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kota Bitung</td>
                    <td>Laporan</td>
                    <td>laporan Kasus Covid-19</td>
                    <td>15 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#000000;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>

                    </td>
                </tr>
                <tr>
                    <td>Kabupaten Minahasa</td>
                    <td>laporan</td>
                    <td>Laporan Pembangunan Jalan Tol</td>
                    <td>22 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Dinas Kesehatan</td>
                    <td>Surat</td>
                    <td>Surat Khusus Kepala Biro</td>
                    <td>12 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#36F917;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kota Bitung</td>
                    <td>Laporan</td>
                    <td>laporan Kasus Covid-19</td>
                    <td>15 Januari 2022</td>
                    <td class="buttons">
                        <button type="button" class="btn btn-warning" data-bs-trigger="focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            <i class="bi bi-eye" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Lihat</a>
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-check-circle " style="color:#000000;"></i>
                            <a href=" <?= base_url('') ?>">Disposisi</a>
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-trigger="focus" data-bs-container="body">
                            <i class="bi bi-file-earmark-text" style="color: black;"></i>
                            <a href="<?= base_url('') ?>">Detail</a>
                        </button>

                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</div>

<style>
    .container {
        margin-top: 171px;
        width: 100%;
    }

    /* th:first-of-type {
        border-top-left-radius: 10px;
    }

    th:last-of-type {
        border-top-right-radius: 10px;
    } */

    /* Dropdown */
    .dua-aksi {
        width: 50%;
        display: flex;
        flex-direction: row;
        gap: 2rem;
        margin-bottom: 65px;
    }

    .dua-aksi .dropdown1 {
        width: 50%;
    }

    .dua-aksi .dropdown2 {
        width: 50%;
    }

    /* .container .dua-aksi {
        display: flex;
        flex-direction: column;
        background: blue;
        gap: 2rem;
    }

    .container .dua-aksi label {
        font-size: large;
    }


    .dua-aksi .dropdown select {
        display: flex;
        width: 352px;
        height: 52px;
        font-size: large;
        border-radius: 10px;
    } */


    /* Table */
    .card-body {
        /* width: 1500px; */
    }

    /* .card {
        width: 1500px;
        flex-grow: 1;
    } */

    /* table thead {
        background-color: #968C8C;
        border-radius: 10px;
    } */

    /* tbody td .buttons {
        background-color: black;
    } */

    /* thead th {
        border-radius: 10px;
    } */
    /* .actions {
        background-color: aqua;
        display: flex;
        width: 50%;
    } */

    .buttons .btn i {
        font-size: 15px
    }

    .buttons .btn a {
        text-decoration: none;
        color: white
    }
</style>