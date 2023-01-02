<h2 style="margin-top:0px">Data Variabel</h2>
<div class="row" style="margin-bottom: 10px">
    <div class="col-md-4">
        <?php echo anchor(site_url('data_variabel/create'), 'Tambah Data Variabel', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="col-md-1 text-right">
    </div>
    <div class="col-md-3 text-right">
        <form action="<?php echo site_url('data_variabel/index'); ?>" class="form-inline" method="get">
            <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <span class="input-group-btn">
                    <?php
                    if ($q <> '') {
                    ?>
                        <a href="<?php echo site_url('data_variabel'); ?>" class="btn btn-default">Reset</a>
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
        <th>Kode Variabel</th>
        <th>Tipe Variabel</th>
        <th>Nama Variabel</th>
        <th>Action</th>
    </tr><?php
            foreach ($data_variabel_data as $data_variabel) {
            ?>
        <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $data_variabel->kode_variabel ?></td>
            <td><?php echo $data_variabel->tipe_variabel ?></td>
            <td><?php echo $data_variabel->nama_variabel ?></td>
            <td style="text-align:center" width="200px">
                <?php
                echo anchor(site_url('data_variabel/read/' . $data_variabel->id), 'Read');
                echo ' | ';
                echo anchor(site_url('data_variabel/update/' . $data_variabel->id), 'Update');
                echo ' | ';
                echo anchor(site_url('data_variabel/delete/' . $data_variabel->id), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
        <?php echo anchor(site_url('data_variabel/excel'), 'Excel', 'class="btn btn-primary"'); ?>
        <?php echo anchor(site_url('data_variabel/word'), 'Word', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>