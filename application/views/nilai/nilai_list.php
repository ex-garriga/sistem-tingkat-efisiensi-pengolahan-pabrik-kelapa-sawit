<h2 style="margin-top:0px">Nilai</h2>
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('nilai/create'), 'Tambah Nilai', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right">
    </div>
    <div class="col-md-3 text-right">
        <form action="<?php echo site_url('nilai/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php
                    if ($q <> '') {
                    ?>
                        <a href="<?php echo site_url('nilai'); ?>" class="btn btn-default">Reset</a>
                    <?php
                    }
                    ?>
                    <button class="btn btn-primary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>
<table class="table table-bordered" style="margin-bottom: 10px">
    <tr>
        <th>No</th>
        <th>Nama Dmu</th>
        <th>Jumlah Karyawan</th>
        <th>Shiff Kerja</th>
        <th>Kapasitas Produksi (Ton/Jam)</th>
        <th>Tbs Masuk (Ton)</th>
        <th>Produksi CPO (Ton)</th>
        <th>Produksi Karnel (Ton)</th>
        <th>Action</th>
    </tr><?php
            foreach ($nilai_data as $nilai) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $nilai->nama_dmu ?></td>
            <td><?php echo $nilai->jumlah_karyawan ?></td>
            <td><?php echo $nilai->shiff_kerja ?></td>
            <td><?php echo $nilai->kapasitas_produksi ?></td>
            <td><?php echo $nilai->tbs_masuk ?></td>
            <td><?php echo $nilai->produksi_cpo ?></td>
            <td><?php echo $nilai->produksi_karnel ?></td>
            <td style="text-align:center" width="200px">
                <?php
                echo anchor(site_url('nilai/read/' . $nilai->id_nilai), 'Read');
                echo ' | ';
                echo anchor(site_url('nilai/update/' . $nilai->id_nilai), 'Update');
                echo ' | ';
                echo anchor(site_url('nilai/delete/' . $nilai->id_nilai), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                ?>
            </td>
        </tr>
    <?php
            }
    ?>
</table>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        <?php echo anchor(site_url('nilai/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('nilai/word'), 'Word', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>