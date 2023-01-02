
        <h2 style="margin-top:0px">Nilai </h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Dmu <?php echo form_error('nama_dmu') ?></label>
            <input type="text" class="form-control" name="nama_dmu" id="nama_dmu" placeholder="Nama Dmu" value="<?php echo $nama_dmu; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah Karyawan <?php echo form_error('jumlah_karyawan') ?></label>
            <input type="text" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" placeholder="Jumlah Karyawan" value="<?php echo $jumlah_karyawan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Shiff Kerja <?php echo form_error('shiff_kerja') ?></label>
            <input type="text" class="form-control" name="shiff_kerja" id="shiff_kerja" placeholder="Shiff Kerja" value="<?php echo $shiff_kerja; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kapasitas Produksi <?php echo form_error('kapasitas_produksi') ?></label>
            <input type="text" class="form-control" name="kapasitas_produksi" id="kapasitas_produksi" placeholder="Kapasitas Produksi" value="<?php echo $kapasitas_produksi; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tbs Masuk <?php echo form_error('tbs_masuk') ?></label>
            <input type="text" class="form-control" name="tbs_masuk" id="tbs_masuk" placeholder="Tbs Masuk" value="<?php echo $tbs_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Produksi Cpo <?php echo form_error('produksi_cpo') ?></label>
            <input type="text" class="form-control" name="produksi_cpo" id="produksi_cpo" placeholder="Produksi Cpo" value="<?php echo $produksi_cpo; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Produksi Karnel <?php echo form_error('produksi_karnel') ?></label>
            <input type="text" class="form-control" name="produksi_karnel" id="produksi_karnel" placeholder="Produksi Karnel" value="<?php echo $produksi_karnel; ?>" />
        </div>
	    <input type="hidden" name="id_nilai" value="<?php echo $id_nilai; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('nilai') ?>" class="btn btn-default">Cancel</a>
	</form>