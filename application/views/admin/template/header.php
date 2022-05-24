<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo_MPTI2_multi-color_icon.png') ?>" type="image/x-icon">
    <title><?= $tittle ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/riwayat_penimbangan.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/timbang_sampah.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/kategori_sampah.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/list_member.css') ?>">
</head>

<body>
    <nav id="side_navbar">
        <div class="container">
            <h2>SIBAKMI</h2>
            <a href="<?= base_url('admin') ?>/">riwayat penimbangan</a>
            <a href="<?= base_url('admin/timbang') ?>">timbang sampah</a>
            <a href="<?= base_url('admin/list_member') ?>">list member</a>
            <a href="<?= base_url('admin/kategori_sampah') ?>">kategori sampah</a>
            <a href="<?= base_url('login/logout') ?>">logout</a>
        </div>
    </nav>