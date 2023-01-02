
        <h2 style="margin-top:0px">Hasil </h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Dmu <?php echo form_error('nama_dmu') ?></label>
            <input type="text" class="form-control" name="nama_dmu" id="nama_dmu" placeholder="Nama Dmu" value="<?php echo $nama_dmu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Efisiensi <?php echo form_error('efisiensi') ?></label>
            <input type="text" class="form-control" name="efisiensi" id="efisiensi" placeholder="Efisiensi" value="<?php echo $efisiensi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <input type="hidden" name="id_hasil" value="<?php echo $id_hasil; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('hasil') ?>" class="btn btn-default">Cancel</a>
	</form>