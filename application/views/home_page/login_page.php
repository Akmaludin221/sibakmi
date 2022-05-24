<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('assets/img/logo_MPTI2_multi-color_icon.png') ?>" type="image/x-icon">
    <title><?= $tittle ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
</head>

<body style="background-image: url(<?= base_url() ?>assets/img/pohon.jpg);">
    <div class="login">
        <div class="container">
            <h1>Login SIBAKMI</h1>
            <form action="<?= base_url('login/aksi_login') ?>" method="POST">
                <div class="inputcase">
                    <label for="id">Id</label>
                    <input type="text" name="id">
                </div>
                <div class="inputcase">
                    <label for="Password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="buttoncase">
                    <a href="<?= base_url() ?>">Kembali</a>
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>