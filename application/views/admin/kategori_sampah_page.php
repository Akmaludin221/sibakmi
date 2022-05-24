<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="main_admin_section">
    <div class="container">
        <div class="kategori_sampah">
            <h2>Kategori Sampah</h2>
            <button id="tampil_model">Buat Baru</button>
            <div class="list">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $num = 0;
                    foreach ($get_data->result() as $row) {
                        $num++; ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->nama_sampah ?></td>
                            <td><?= $row->jenis_sampah ?></td>
                            <td><?= $row->harga ?></td>
                            <td><a id="edit" onclick="go_edit(<?= $num ?>)">EDIT</a> <a href="<?= base_url('admin/delete?page=kategori_sampah&id=' . $this->encryption->encrypt($row->id) . '') ?>">DELETE</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="modal">
    <div class="container">
        <h2>Kategori sampah baru</h2>
        <form action="<?= base_url('admin/input_kategori') ?>" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="input_container">
                <label for="nama">nama sampah</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input_container">
                <label for="jenis">jenis</label>
                <select name="jenis" id="jenis">
                    <option value="plastik">Plastik</option>
                    <option value="kertas">Kertas</option>
                    <option value="logam">logam</option>
                </select>
            </div>
            <div class="input_container">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">
            </div>
            <div class="button_case">
                <a id="kembali">kembali</a>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url('assets/js/model.js') ?>"></script>
<script>
    function go_edit(x) {
        const tr = document.querySelectorAll("tr");
        const id = tr[x].children[0].textContent;
        const nama = tr[x].children[1].textContent;
        const jenis = tr[x].children[2].textContent;
        const harga = tr[x].children[3].textContent;
        go_value(id, nama, jenis, harga);
    }

    function go_value(id, nama, jenis, harga) {
        document.querySelector('.modal').style.display = "flex";
        document.getElementById('id').value = id;
        document.getElementById('nama').value = nama;
        document.getElementById('jenis').value = jenis;
        document.getElementById('harga').value = harga;
    }
</script>