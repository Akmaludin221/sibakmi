<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="modal">
    <div class="container">
        <h2>Kategori sampah baru</h2>
        <form action="<?= base_url('admin/input_kategori') ?>" method="POST">
            <input type="hidden" name="id">
            <div class="input_container">
                <label for="nama">nama sampah</label>
                <input type="text" name="nama">
            </div>
            <div class="input_container">
                <label for="jenis">jenis</label>
                <select name="jenis" id="jenis">
                    <option value="plastik">Plastik</option>
                    <option value="kertas">Kertas</option>
                    <option value="kaca">logam</option>
                </select>
            </div>
            <div class="input_container">
                <label for="harga">Harga</label>
                <input type="text" name="harga">
            </div>
            <div class="button_case">
                <a id="kembali">kembali</a>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</section>