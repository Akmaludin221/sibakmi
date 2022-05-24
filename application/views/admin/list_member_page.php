<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="main_admin_section">
    <div class="container">
        <div class="list_member">
            <h2>List Member</h2>
            <button id="tampil_model">Daftar Member Baru</button>
            <div class="list">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $num = 0;
                    foreach ($get_data->result() as $row) {
                        $num++; ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->jenis_kelamin ?></td>
                            <td><?= $row->alamat ?></td>
                            <td><a id="edit" onclick="go_edit(<?= $num ?>)">EDIT</a> <a href="<?= base_url('admin/delete?page=list_member&id=' . $this->encryption->encrypt($row->id) . '') ?>">DELETE</a></td>
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
        <form action="input_member" method="POST">
            <input type="hidden" name="id" id="id">
            <div class="input_container">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="input_container">
                <label for="jk">Jenis Kelamin</label>
                <div>
                    <label for="L">Laki-Laki<input type="radio" name="jenis_kelamin" id="jk1" value="L"></label>
                    <label for="P">perempuan<input type="radio" name="jenis_kelamin" id="jk2" value="P"></label>
                </div>
            </div>
            <div class="input_container">
                <label for="alamat">alamat</label>
                <textarea name="alamat" id="alamat" cols="31" rows="5"></textarea>
            </div>
            <div class="button_case">
                <a id="kembali">Kembali</a>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
</section>
<script src="<?= base_url() ?>/assets/js/model.js"></script>
<script>
    function go_edit(x) {
        const tr = document.querySelectorAll("tr");
        const id = tr[x].children[0].textContent;
        const nama = tr[x].children[1].textContent;
        const jk = tr[x].children[2].textContent;
        const alamat = tr[x].children[3].textContent;
        go_value(id, nama, jk, alamat);
    }

    function go_value(id, nama, jk, alamat) {
        document.querySelector('.modal').style.display = "flex";
        document.getElementById('id').value = id;
        document.getElementById('nama').value = nama;
        if (document.getElementById('jk1').value == jk) {
            document.getElementById('jk1').checked = true;
        } else if (document.getElementById('jk2').value == jk) {
            document.getElementById('jk2').checked=true;
        }
        document.getElementById('alamat').value = alamat;
    }
</script>