<style>
    body {
        width: 1920px;
        /* height: 1080px; */
        margin-top: 58px;
        height: 100vh;
        background: linear-gradient(223.79deg, #FF8B7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
    }

    h1 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 105px;
    }

    h5 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 35px;
        color: #7A7A7A;
    }
</style>



<div class="container">

    <!-- header -->
    <div class="header">
        <div class="row">
            <div class="col-lg">
                <a href="<?= base_url('user/tampilanHome_user') ?>"></a>
                <h1 class="txtTitle">SILONBOG</h1>
                <h5>Sistem Layanan Online Biro Organisasi</h5>
            </div>
            <div class="d-flex  align-items-center col-lg-auto justify-content-end me-5">
                <i class="bi bi-person-circle me-3" style="font-size: 75px; "></i>
                <h4 style="width: 100px;"><?= $user['name'] ?></h4>
            </div>
        </div>
    </div>
    <!-- end of header -->

    <!-- content -->
    <div class="content">

        <!-- <h3>KIRIM SURAT</h3> -->

        <div class="d-flex justify-content-center">
            <div>
                <h3 class="text-center mt-5 txtKirim">Kirim Surat</h3>

                <!--form -->
                <!-- dropdown -->
                <div class=" d-flex forms mt-5 " style="width: 1000px;">
                    <select class="form-select form-select-lg me-5" aria-label=".form-select-lg example">
                        <option selected value="">Pusat-Prov-Kab/Kot</option>
                        <option value="1">Pusat</option>
                        <option value="2">Prov</option>
                        <option value="2">Kab/Kota</option>
                    </select>
                    <select class="form-select form-select-lg ms-5" aria-label=".form-select-lg example">
                        <option selected>Dinas</option>
                        <option value="1">Badan</option>
                        <option value="2">UPTD</option>
                    </select>
                </div>
                <div class=" d-flex forms mt-5 " style="width: 1000px;">
                    <select class="form-select form-select-lg me-5" aria-label=".form-select-lg example">
                        <option selected>Prov, Kab/Kot</option>
                        <option value="1">Prov</option>
                        <option value="2">Kab/Kota</option>
                    </select>
                    <select class="form-select form-select-lg ms-5" aria-label=".form-select-lg example">
                        <option selected>Dinas</option>
                        <option value="1">Badan</option>
                        <option value="2">UPTD</option>
                    </select>
                </div>
                <!-- text input -->
                <div class=" d-flex forms mt-5" style="width: 1000px;">
                    <div class="form-floating me-5" style="width: 650px;">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="name@example.com"></input>
                        <label>Perihal</label>
                    </div>
                    <div class=" form-floating ms-5" style="width: 650px;">
                        <input type="text" class="form-control" id="lainya" name="lainya" placeholder="name@example.com"></input>
                        <label>Lainya</label>
                    </div>
                </div>

                <!-- pilih file -->

                <!-- <div class=" d-flex justify-content-center mt-5">
                    <input type="file" id="file" accept="application/pdf">
                    <label for="file"> <strong>Pilih</strong>&nbsp;<i class="bi bi-plus" style="font-size: 40px;"></i></label>
                </div> -->
                <br>

                <div class="row">
                    <div class="col">
                        <select class=" form-select form-select-lg mt-4" aria-label=".form-select-lg example">
                            <option selected>Dinas</option>
                            <option value="1">Badan</option>
                            <option value="2">UPTD</option>
                        </select>
                    </div>
                    <div class="col mt-4">
                        <input class="form-control form-control-lg" id="formFileLg" type="file" accept="application/pdf">
                    </div>
                </div>

                <div class=" d-flex justify-content-center mt-5">
                    <button type=" submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 230px; height: 55px; font-size: 25px;"><strong>Kirim</strong></button>
                </div>



            </div>

        </div>

    </div>
    <!-- end of content -->

</div>