<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data_dmu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Dmu</th>
		<th>Jenis Pabrik</th>
		<th>Alamat</th>
		
            </tr><?php
            foreach ($data_dmu_data as $data_dmu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $data_dmu->nama_dmu ?></td>
		      <td><?php echo $data_dmu->jenis_pabrik ?></td>
		      <td><?php echo $data_dmu->alamat ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>