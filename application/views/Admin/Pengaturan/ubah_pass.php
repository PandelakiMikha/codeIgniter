<ul name="" id="" class="daftar-user">
    <?php foreach ($users as $u) : ?>
        <li class="pilih-user">

            <a href="<?php echo base_url() . "Ktu/ubah_pass/" . $u->id; ?>"><?php echo $u->name; ?></a>

        </li>
    <?php endforeach; ?>
</ul>


<div class="tambah-user-container">
    <h4>Ubah Password User</h4>

    <?php foreach ($userID as $user) : ?>
        <p>Ubah Password <b><?php echo $user->name; ?></b></p>
        <form class="form-tambah-user-container" method="POST" action="<?= base_url('Ktu/pass'); ?>">
            <?= $this->session->flashdata('massage'); ?>
            <input type="hidden" name="id" value="<?php echo $user->id; ?>">

            <label for="">Password</label>
            <input type="text" name="password1" id="password" placeholder="Masukan Password Baru User" required>

            <button type="submit">Tambah</button>
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
        margin-top: 20px;

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
</style>