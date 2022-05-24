<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBAKMI member</title>
    <link rel="icon" href="<?= base_url('assets/img/logo_MPTI2_multi-color_icon.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/member.css') ?>">
</head>

<body>
    <div class="main">
        <header id="log_out">
            <div class="container">
                <a href="<?= base_url('login/logout') ?>">Logout</a>
            </div>
        </header>
        <section id="information">
            <div class="container">
                <h1>Profile</h1>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><?= $get_user_data->row(0)->id ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $get_user_data->row(0)->nama ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $get_user_data->row(0)->alamat ?></td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="pool">
            <div class="container">
                <div class="berat_pool">
                    <p><?= round($get_data_pools->row(0)->berat, 2) ?><span>.kg</span></p>
                    <h3>Total berat sampah</h3>
                </div>
                <div class="money_pool">
                    <p> <span>Rp.</span><?= $get_data_pools->row(0)->total ?></p>
                    <h3>Uang yang dikumpulkan</h3>
                </div>
            </div>
        </section>
        <section id="riwayat">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>ID transaksi</th>
                            <th>Sampah</th>
                            <th>berat</th>
                            <th>total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($get_data->result() as $row) { ?>
                            <tr>
                                <td><?= $row->tgl ?></td>
                                <td><?= $row->id ?></td>
                                <td><?= $row->nama_sampah ?></td>
                                <td><?= $row->berat ?></td>
                                <td><?= $row->total_harga ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>