<div class="background-gradient">
    <div class="row">
        <div class="col-lg-5 content1">
            <div>
                <p class="txtWelcome">Selamat Datang di</p>
                <h1 class="txtTitle">SILONBOG</h1>
                <h5 class="txtTitleElaborate">Sistem Layanan Online Biro Organisasi</h5>
            </div>
            <div class="forms mt-5">
                <?= $this->session->flashdata('massage'); ?>
                <form method="POST" action="<?= base_url('auth'); ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?= set_value('email'); ?>">
                        <label for="email">Email</label>
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-danger btn-masuk">
                        Masuk
                    </button>
                </form>
            </div>
            <div class="daftar-disini mt-3">
                <p>Belum punya akun? <strong><a class="text-dark" href="<?= base_url('auth/registration') ?> ">Daftar disini.</a></strong></p>
            </div>
        </div>
        <div class="col-lg-5 imgWrapper">
            <img class="img" src="<?php echo base_url('assets/logo/provSulut.png') ?>">
        </div>
    </div>
</div>




<style>
    input {}

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

    .p,
    p {
        margin: 0;
    }

    .background-gradient {
        background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
        width: 100%;
        height: 100vh;
    }

    .form-floating>.form-control {
        background-color: #FFEBEB99;
        height: 60px;
    }

    .form-control:focus {
        border-color: #ff0000 !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6) !important;
    }

    .content1 {
        padding-top: 240px;
        margin-left: 190px;
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

    /* for laptops with width screen 1025px to 1200px */
    /* @media only screen and (min-width:1025px) and (max-width: 1200px) {

        h1 {
            font-size: 20px;
        }

        .bacground-gradient {
            background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%);
            width: 100%;
            height: 100vh;
        }

        .content1 {
            padding-top: 70px;
            margin-left: 50px;
            width: 530px;
        }

        .img {
            width: 900px;
            height: 100vh;
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
            max-height: 100px;
            max-width: 200px;
        }

        .form-floating>.form-control {
            height: 12px;
            width: 300px;
            font-size: 14px;
            margin: 0;
            padding: 18px;
        }

        .form-floating label {
            font-size: 12px;
            padding-top: 8px;
            margin-top: 0;
        }

        .txtTitle {
            font-size: 70px;
            margin-top: 0;
        }

        .txtWelcome {
            font-size: 40px;
        }

        .txtTitleElaborate {
            font-size: 18px;
        }

        .btn-masuk {
            width: 90px;
            height: 30px;
            font-size: 14px;
            padding: 12px 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .daftar-disini {
            font-size: 12px;
        }

        .nama-pengguna {
            margin-top: 15px;
        }
    } */
    /*  */

    /* for laptops with width screen 1280px to 1536px */
    @media only screen and (min-width:1280px) and (max-width: 1536px) {

        .background-gradient {
            /* background: linear-gradient(223.79deg, #FF7C7C 0.75%, rgba(215, 212, 212, 0) 75.53%); */
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .content1 {
            padding-top: 130px;
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
            width: 400px;
        }

        .form-floating {
            max-height: 400px;
            max-width: 400px;
        }

        .form-floating>.form-control {
            width: 400px;
            height: 45px;
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

        .txtWelcome {
            font-size: 50px;
        }

        .txtTitleElaborate {
            font-size: 20px;
        }

        .btn-masuk {
            width: 90px;
            height: 35px;
            font-size: 14px;
            font-weight: 500;
            padding: 12px 12px;
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
</style>

</html>