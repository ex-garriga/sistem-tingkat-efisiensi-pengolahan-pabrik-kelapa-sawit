
        <h2 style="margin-top:0px">Data Variabel</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kode Variabel <?php echo form_error('kode_variabel') ?></label>
            <input type="text" class="form-control" name="kode_variabel" id="kode_variabel" placeholder="Kode Variabel" value="<?php echo $kode_variabel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tipe Variabel <?php echo form_error('tipe_variabel') ?></label>
            <input type="text" class="form-control" name="tipe_variabel" id="tipe_variabel" placeholder="Tipe Variabel" value="<?php echo $tipe_variabel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Variabel <?php echo form_error('nama_variabel') ?></label>
            <input type="text" class="form-control" name="nama_variabel" id="nama_variabel" placeholder="Nama Variabel" value="<?php echo $nama_variabel; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_variabel') ?>" class="btn btn-default">Cancel</a>
	</form>