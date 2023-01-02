<h2 style="margin-top:0px">Data DMU</h2>
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('data_dmu/create'), 'Tambah Data DMU', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right">
    </div>
    <div class="col-md-3 text-right">
        <form action="<?php echo site_url('data_dmu/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php
                    if ($q <> '') {
                    ?>
                        <a href="<?php echo site_url('data_dmu'); ?>" class="btn btn-default">Reset</a>
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
        <th>Jenis Pabrik</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr><?php
            foreach ($data_dmu_data as $data_dmu) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $data_dmu->nama_dmu ?></td>
            <td><?php echo $data_dmu->jenis_pabrik ?></td>
            <td><?php echo $data_dmu->alamat ?></td>
            <td style="text-align:center" width="200px">
                <?php
                echo anchor(site_url('data_dmu/read/' . $data_dmu->id_dmu), 'Read');
                echo ' | ';
                echo anchor(site_url('data_dmu/update/' . $data_dmu->id_dmu), 'Update');
                echo ' | ';
                echo anchor(site_url('data_dmu/delete/' . $data_dmu->id_dmu), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
        <?php echo anchor(site_url('data_dmu/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('data_dmu/word'), 'Word', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>