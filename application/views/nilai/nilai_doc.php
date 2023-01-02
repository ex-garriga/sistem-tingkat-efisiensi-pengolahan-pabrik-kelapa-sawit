<!doctype html>
<html>

<head>
    <title>harviacode.com - codeigniter crud generator</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <style>
        .word-table {
            border: 1px solid black !important;
            border-collapse: collapse !important;
            width: 100%;
        }

        .word-table tr th,
        .word-table tr td {
            border: 1px solid black !important;
            padding: 5px 10px;
        }

        img {
            width: 70px;
        }
    </style>
</head>

<body>
    <h2>Laporan Analisa</h2>
    <table class="word-table" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
            <th>Nama Dmu</th>
            <th>Jumlah Karyawan</th>
            <th>Shiff Kerja</th>
            <th>Kapasitas Produksi</th>
            <th>Tbs Masuk</th>
            <th>Produksi Cpo</th>
            <th>Produksi Karnel</th>

        </tr><?php
                foreach ($nilai_data as $nilai) {
                ?>
            <tr>
                <td><?php echo ++$start ?></td>
                <td><?php echo $nilai->nama_dmu ?></td>
                <td><?php echo $nilai->jumlah_karyawan ?></td>
                <td><?php echo $nilai->shiff_kerja ?></td>
                <td><?php echo $nilai->kapasitas_produksi ?></td>
                <td><?php echo $nilai->tbs_masuk ?></td>
                <td><?php echo $nilai->produksi_cpo ?></td>
                <td><?php echo $nilai->produksi_karnel ?></td>
            </tr>
        <?php  } ?>
    </table>
    <h2>Laporan Hasil</h2>
    <table class="word-table" style="margin-bottom: 10px">
        <tr>

            <th>Nama Dmu</th>
            <th>Efisiensi</th>
            <th>Status</th>

        </tr><?php
                foreach ($hasil_data as $hasil) {
                ?>
            <tr>

                <td><?php echo $hasil->nama_dmu ?></td>
                <td><?php echo $hasil->efisiensi ?></td>
                <td><?php echo $hasil->status ?></td>
            </tr>
        <?php
                }
        ?>
    </table>

</body>

</html>