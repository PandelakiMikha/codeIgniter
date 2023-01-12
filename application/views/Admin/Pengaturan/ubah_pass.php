<div class="tambah-user-container">
    <div class="pilih-user-container">


        <h5>Pilih User</h5>
        <i class="bi bi-chevron-down" style="font-size:18px"></i>
        <div name="" id="" class="daftar-user">
            <?php foreach ($users as $u) : ?>

                <a href="<?php echo base_url() . "Ktu/ubah_pass/" . $u->id; ?>"><?php echo $u->name; ?></a>
            <?php endforeach; ?>
        </div>

    </div>
    <?= $this->session->flashdata('massage'); ?>

    <?php foreach ($userID as $user) : ?>

        <h4>Ubah Password User</h4>
        <p>Ubah Password <b><?php echo $user->name; ?></b></p>
        <form class="form-tambah-user-container" method="POST" action="<?= base_url('Ktu/pass'); ?>">

            <?= $this->session->flashdata('massage'); ?>
            <input type="hidden" name="id" value="<?php echo $user->id; ?>">

            <label for="">Password</label>
            <input type="text" name="password1" id="password" placeholder="Masukan Password Baru User" required>

            <button type="submit">Ubah</button>
        </form>
    <?php endforeach; ?>
</div>

<style>
    .tambah-user-container {
        display: flex;
        /* justify-content: center; */
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 500px;
    }

    .form-tambah-user-container {
        width: 20%;
        display: flex;
        flex-direction: column;
    }

    .form-tambah-user-container input {
        border: none;
        outline: none;
        border-bottom: 1px solid black;
        padding-left: 10px;
    }

    .form-tambah-user-container input:focus {
        border-bottom: 1px solid #EB6D6D;
        padding-left: 10px;
    }

    .form-tambah-user-container button {
        width: 45%;
        height: 30px;
        outline: none;
        border-radius: 5px;
        background: #EB6D6D;
        align-self: center;
        margin-top: 25px;
        color: white;
        border: 1px solid #EB6D6D;
    }

    .form-tambah-user-container button:hover {
        border: 1px solid white;
    }



    .pilih-user-container {
        border-style: dotted;
        width: 60%;
        height: 40px;
        line-height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-bottom: 30px;
    }

    .pilih-user-container i:hover {
        color: #EB6D6D;
        cursor: pointer;
    }

    .pilih-user-container h5 {
        margin: 0;
        font-size: 20px;
        margin-right: 7px;
    }

    .pilih-user-container .daftar-user {
        position: absolute;
        background: #EB6D6D;
        top: 0;
        right: -5%;
        width: 350px;
        height: 220px;
        display: flex;
        flex-direction: column;
        border-radius: 12px;
        padding: 5px;
        overflow: hidden;
        overflow-y: scroll;
        opacity: 0;
        display: none;
    }

    .pilih-user-container .daftar-user.active {
        opacity: 1;
        display: flex;
    }


    .pilih-user-container a {
        text-decoration: none;
        color: white;
        width: 100%;
        margin: 0;
        height: 30px;
        line-height: 30px;
    }

    .pilih-user-container a:hover {
        background: white;
        color: black;
    }

    .msg-container {}
</style>