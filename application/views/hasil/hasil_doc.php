<!doctype html>
<html>

<head>
    <title>dmu</title>
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
    </style>
</head>

<body>
    <h2>Hasil List</h2>
    <table class="word-table" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
            <th>Nama Dmu</th>
            <th>Efisiensi</th>
            <th>Status</th>

        </tr><?php
                foreach ($hasil_data as $hasil) {
                ?>
            <tr>
                <td><?php echo ++$start ?></td>
                <td><?php echo $hasil->nama_dmu ?></td>
                <td><?php echo $hasil->efisiensi ?></td>
                <td><?php echo $hasil->status ?></td>
            </tr>
        <?php
                }
        ?>
    </table>

    <img src="assets/images.jpg" alt="">
</body>

</html>