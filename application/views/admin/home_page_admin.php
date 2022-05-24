<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section id="main_admin_section">
    <div class="container">
        <div class="riwayat_penimbangan">
            <h2>Riwayat penimbangan</h2>
            <div class="list_penimbangan">
                <table id="riwayat">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Penyetor</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="modal">
    <div class="container">
        <table id="detail">

        </table>
        <div class="button_case">
            <a onclick="back()">Kembali</a>
            <a id="here_edit">Edit</a>
            <a id="here_delete">hapus</a>
        </div>
    </div>
</section>
<script>
    var timbangSampah = [];
    const modal = document.querySelector('.modal');
    <?php foreach ($get_list->result() as $row) { ?>
        timbangSampah.push({
            id: '<?= $row->id ?>',
            tgl: '<?= $row->tgl ?>',
            idMember: '<?= $row->id_member ?>',
            nama: '<?= $row->nama ?>',
            idKategori: '<?= $row->id_kategori_sampah ?>',
            namaSampah: '<?= $row->nama_sampah ?>',
            harga: <?= $row->harga ?>,
            berat: <?= $row->berat ?>,
            totalHarga: <?= $row->total_harga ?>
        });
    <?php } ?>


    function getRiwayat() {
        const my_table = document.querySelector('tbody');
        let output = '';
        for (let i = 0; i < timbangSampah.length; i++) {
            output += `
                <tr>
                    <td>${timbangSampah[i].tgl}</td>
                    <td>${timbangSampah[i].nama}</td>
                    <td>${timbangSampah[i].namaSampah} ${timbangSampah[i].berat}.kg</td>
                    <td><button onclick="showDetail('${timbangSampah[i].id}')">detail</button></td>
                </tr>
            `;
        }
        my_table.innerHTML = output;
    }

    function showDetail(arr) {
        let data = []
        const data2 = ['id', 'tanggal', 'id member', 'nama', 'id sampah', 'nama sampah', 'harga perkilo', 'berat', 'total harga'];
        const get_table = document.getElementById('detail');
        let output = ''
        for (let i = 0; i < timbangSampah.length; i++) {
            if (arr == timbangSampah[i].id) {
                data = [
                    timbangSampah[i].id,
                    timbangSampah[i].tgl,
                    timbangSampah[i].idMember,
                    timbangSampah[i].nama,
                    timbangSampah[i].idKategori,
                    timbangSampah[i].namaSampah,
                    timbangSampah[i].harga,
                    timbangSampah[i].berat,
                    timbangSampah[i].totalHarga
                ]
            }
        }
        for (let i = 0; i < data.length; i++) {
            output += `<tr>
            <td>${data2[i]}</td>
            <td>:</td>
            <td>${data[i]}</td>
            </tr>`;
        }
        const delete_btn = document.getElementById('here_delete').href = "<?=base_url('admin/delete?page=riwayat')?>&id="+data[0]+"";
        const edit = document.getElementById('here_edit').href = "<?=base_url('admin/timbang')?>?id="+data[0]+"";
        modal.style.display = 'flex';
        get_table.innerHTML = output;
    }

    function back() {
        modal.style.display = 'none';
    }
    getRiwayat();
</script>