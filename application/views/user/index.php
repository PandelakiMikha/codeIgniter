<div class="page">
    <div class="d-flex mb-5">
        <div class="header ">
            <h1 class="txtTitle">SILONBOG</h1>
            <h5 class="txtTitleElaborate">Sistem Layanan Online Biro Organisasi</h5>
        </div>
        <div class="profile d-flex flex-grow-1 align-items-center justify-content-end me-5">
            <i class="bi bi-person-circle me-3" style="font-size: 75px; "></i>
            <h5 style="width: 100px;">Dinas Kesehatan</h5>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <h3 class="text-center mt-5 txtKirim">Kirim Surat</h3>
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
            <div class=" d-flex forms mt-5" style="width: 1000px;">
                <div class="form-floating me-5" style="width: 650px;">
                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com""></input>
                    <label>Email</label>
                </div>
                <div class=" form-floating ms-5" style="width: 650px;">
                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com""></input>
                    <label>Email</label>
                </div>  
            </div>
            <div class=" d-flex justify-content-center mt-5">
                    <input type="file" id="file" accept="application/pdf">
                    <label for="file"> <strong>Pilih</strong>&nbsp;<i class="bi bi-plus" style="font-size: 40px;"></i></label>
                </div>
                <div class=" d-flex justify-content-center mt-5">
                    <button type=" submit" class="btn btn-danger d-flex align-items-center justify-content-center" style="width: 230px; height: 55px; font-size: 25px;"><strong>Kirim</strong></button>
                </div>
            </div>
        </div>
    </div>

    <style>
        input[type='file'] {
            display: none;
        }

        label[for='file'] {
            color: white;
            width: 200px;
            height: 55px;
            background-color: #A5A5A599;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            border-radius: 8px;
        }

        .page {
            /* display: flex;
        flex: 1; */
            height: 100vh;
            background: linear-gradient(223.79deg, #FF8B7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
        }

        .background-gradient {
            /* position: absolute; */
            height: 400px;
            /* width: 100px; */
            background: linear-gradient(143.99deg, rgba(255, 124, 124, 0.5) 30.99%, rgba(217, 217, 217, 0) 44.93%, rgba(217, 217, 217, 0.00568183) 64.45%);
        }

        .header {
            padding-top: 58px;
            margin-left: 100px;
        }

        .txtTitle {
            font-weight: 700;
            font-size: 100px;
        }

        .txtTitleElaborate {
            font-weight: 500;
            font-size: 35px;
            color: #7A7A7A;
        }

        .forms {
            width: 538px;
        }
    </style>