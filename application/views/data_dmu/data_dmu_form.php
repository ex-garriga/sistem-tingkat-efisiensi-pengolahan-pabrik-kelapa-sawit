
        <h2 style="margin-top:0px">Data DMU</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Dmu <?php echo form_error('nama_dmu') ?></label>
            <input type="text" class="form-control" name="nama_dmu" id="nama_dmu" placeholder="Nama Dmu" value="<?php echo $nama_dmu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Pabrik <?php echo form_error('jenis_pabrik') ?></label>
            <input type="text" class="form-control" name="jenis_pabrik" id="jenis_pabrik" placeholder="Jenis Pabrik" value="<?php echo $jenis_pabrik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <input type="hidden" name="id_dmu" value="<?php echo $id_dmu; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_dmu') ?>" class="btn btn-default">Cancel</a>
	</form>