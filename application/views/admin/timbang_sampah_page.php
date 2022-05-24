<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="main_admin_section">
    <div class="container">
        <div class="timbang_sampah">
            <h2 id="harga">Timbang Sampah</h2>
            <div class="form_timbang_sampah">
                <form action="<?= base_url('admin/input_timbang') ?>" id="timbang" method="POST">
                    <input type="hidden" name="id" value="<?php if (isset($get_data)) echo set_value('id', '' . $get_data->row(0)->id . '') ?>">
                    <div class="input_container">
                        <label for="id_member">ID Member</label>
                        <input type="text" name="id_member" value="<?php if (isset($get_data)) echo set_value('id_member', $get_data->row(0)->id_member) ?>">
                    </div>
                    <div class="input_container">
                        <label for="kategori_sampah">Kategori Sampah</label>
                        <select name="kategori_sampah" id="kategori_sampah">
                            <option value="0" id="one_null">Pilih Kategori</option>
                            <?php foreach ($kategori->result() as $row) { ?>
                                <option value="<?= $row->id ?>" <?php if (isset($get_data)) if ($row->id == $get_data->row(0)->id_kategori_sampah) echo "selected" ?>><?= $row->nama_sampah ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input_container">
                        <label for="berat">Berat</label>
                        <div><input type="text" id="berat" name="berat" value="<?php if (isset($get_data)) echo set_value('berat', $get_data->row(0)->berat) ?>">.kg</div>
                    </div>
                    <div class="input_container">
                        <label for="total">Total Harga Sampah</label>
                        <input type="number" id="total" name="total" value="<?php if (isset($get_data)) echo set_value('total', $get_data->row(0)->total_harga) ?>" readonly>
                    </div>
                    <div class=" input_container">
                        <input type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    var harga = []
    <?php foreach ($kategori->result() as $row) { ?>
        harga.push({
            id: '<?= $row->id ?>',
            nama: '<?= $row->nama_sampah ?>',
            harga: <?= $row->harga ?>
        });
    <?php } ?>

    window.addEventListener('change', hitung);
    window.addEventListener('keyup', hitung);

    function hitung(event) {
        const get_sampah = document.getElementById('kategori_sampah');
        const get_berat = document.getElementById('berat');
        const get_total = document.getElementById('total');
        let harga_sampah = 0;
        for (let i = 0; i < harga.length; i++) {
            if (get_sampah.value == harga[i].id) {
                harga_sampah = harga[i].harga;
            }
        }
        const total = harga_sampah * get_berat.value;
        get_total.value = total;
        document.getElementById('one_null').disabled=true;
    }
</script>