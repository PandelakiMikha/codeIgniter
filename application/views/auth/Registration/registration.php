<div class="bacground-gradient">
    <!-- <div class="header"> -->
    <div class="row">
        <div class="col-lg-5 content1">
            <div>
                <h1 class="txtTitle">SILONBOG</h1>
                <h5 class="txtTitleElaborate">Sistem Layanan Online Biro Organisasi</h5>
            </div>
            <div class="pembungkus-form">
                <div class="daftar-akun">
                    <h1>Daftar Akun</h1>
                </div>
                <div class="forms">
                    <form method="POST" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-floating nama-pengguna mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Rolando Suak" value="<?= set_value('name'); ?>">
                            <label>Nama pengguna</label>
                            <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= set_value('email'); ?>">
                            <label>Alamat Email</label>
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                            <label>Kata sandi</label>
                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
                            <label>Konfirmasi kata sandi</label>
                            <!-- <?= form_error('password2', '<small class="text-danger">', '</small>') ?> -->
                        </div>
                        <button type="submit" class="btn btn-danger btn-masuk">Daftar</button>
                    </form>
                </div>
            </div>
            <div class="masuk-disini mt-3">
                <p>Sudah punya akun? <strong> <a class="text-dark" href="<?= base_url('auth') ?>">Masuk disini.</a></strong></p>
            </div>
        </div>
        <div class="col-lg-5 imgWrapper">
            <img class="img" src="<?php echo base_url('assets/logo/provSulut.png') ?>">
        </div>
    </div>
    <!-- </div> -->
</div>

<style>
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    h1 {
        font-size: 35px;
    }

    .p,
    p {
        margin: 0;
    }

    .form-control {
        background-color: #FFEBEB99;
    }

    .form-control:focus {
        border-color: #ff0000 !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6) !important;
    }

    .bacground-gradient {
        width: 100%;
        height: 100vh;
        background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
    }

    .header {
        display: flex;
    }

    .content1 {
        padding-top: 58px;
        margin-left: 103px;
    }

    .txtWelcome {
        font-size: 70px;
        font-weight: 400;
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
        margin-top: 65px;
    }

    /* .daftar-akun {

    } */
    .pembungkus-form {
        padding-top: 50px;
        margin: 0;
    }

    .forms {
        margin: 0%;
    }

    .btn-masuk {
        width: 150px;
        height: 50px;
        font-size: 20px;
    }

    .imgWrapper {
        display: flex;
        flex: 1;
        justify-content: flex-end;
    }

    .img {
        width: 1000px;
        height: 100vh;
        opacity: 0.4;
    }

    .nama-pengguna {
        margin-top: 20px;
    }



    /* for laptops */
    @media only screen and (min-width:1280px) and (max-width: 1800px) {

        h1 {
            font-size: 22px;
        }

        .bacground-gradient {
            background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .content1 {
            padding-top: 110px;
            margin-left: 90px;
            /* background-color: aqua; */
        }

        .img {
            width: 750px;
            height: 750px;
            opacity: 0.4;
        }

        .imgWrapper {
            display: flex;
            flex: 1;
            justify-content: flex-end;
        }

        .forms {
            width: 300px;
        }

        .form-floating {
            max-height: 500px;
            max-width: 500px;
        }

        .form-floating>.form-control {
            width: 420px;
            height: 48px;
            font-size: 14px;
        }

        .form-floating label {
            font-size: 14px;
            padding-top: 12px;
            margin-top: 0;
        }

        .txtTitle {
            font-size: 90px;
            margin-top: 0;
        }

        .txtTitleElaborate {
            font-size: 20px;
        }

        .btn-masuk {
            width: 90px;
            height: 35px;
            font-size: 14px;
            font-weight: 500;
            padding: 14px 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .daftar-disini {
            font-size: 14px;
        }

        .nama-pengguna {
            margin-top: 15px;
        }
    }

    /* for handphones with width screen 375 to 420px */
    @media only screen and (min-width: 375px) and (max-width: 420px) {

        h1 {
            font-size: 18px;
        }

        .bacground-gradient {
            background: linear-gradient(70deg, #FF7C7C 0.65%, rgba(215, 212, 212, 0) 80.53%);
            /* background: white; */
            width: 100%;
            height: 100vh;
        }

        .content1 {
            padding-left: 50px;
            margin: 0;
            padding-top: 100px;
            width: 97%;
        }

        .txtWelcome {
            font-size: 22px;
            font-weight: 300;
        }

        .txtTitle {
            font-weight: 700;
            font-size: 27px;
        }

        .txtTitleElaborate {
            font-weight: 500;
            font-size: 12px;
            color: #7A7A7A;
        }


        .pembungkus-form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            flex-direction: column;
        }

        .form-floating>.form-control {
            width: 200px;
            height: 7px;
            font-size: 10px;
            background-color: ghostwhite;
        }

        .form-floating label {
            font-size: 10px;
            padding-top: 10px;
            margin-top: 0;
        }

        .form-control:focus {
            border-color: #ff0000 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6) !important;
        }

        .forms {
            width: 200px;
            margin: 0;
        }

        form {
            display: flex;
            align-items: center;
            justify-self: center;
            flex-direction: column;
        }

        .btn-masuk {
            width: 40%;
            height: 27px;
            font-size: 10px;
            font-weight: 500;
            /* padding: 12px 12px; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .masuk-disini {
            display: flex;
            justify-content: center;
            font-size: 9px;
        }

        .imgWrapper {
            display: flex;
            flex: 1;
            justify-content: flex-start;
            position: absolute;
            margin-top: 15px;
            margin-left: 20px;
        }

        .img {
            width: 80px;
            height: 80px;
            /* opacity: 0.4; */
        }


    }
</style>

</html>