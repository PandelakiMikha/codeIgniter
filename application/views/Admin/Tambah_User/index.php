<div class="tambah-user-container">
    <h4>Tambah User</h4>
    <form class="form-tambah-user-container" method="POST" action="">
        <label for="">Username</label>
        <input type="text" id="username" value="">
        <label for="">Email</label>
        <input type="text" id="email" value="">
        <label for="">Password</label>
        <input type="text" id="password" value="">
        <label for="">Konfirmasi Password Baru</label>
        <input type="text" id="konfirmasiPassword" value="">
        <button type="submit">Tambah</button>
    </form>
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