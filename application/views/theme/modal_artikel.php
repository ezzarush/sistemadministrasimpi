<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formAddNotulen" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Data </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('notulen/simpan_notulen'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
                <input type="text" name="perihal" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">No.Berkas / Surat </label>
                <input type="text" name="noberkassurat" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tanggal Notulensi</label>
				<input class="datepicker" name="tanggal" data-date-format="mm/dd/yyyy" style="z-index:9999 !important;">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Jenis Dokumen </label>
				<select name="jenisdok">
					<option>-- pilih jenis dokumen --</option>
					<option value="Asli">Asli</option>
					<option value="Copy">Copy</option>
				</select>
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Lampiran </label>
				<input type="file" name="lampiran">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Keterangan </label>
				<textarea name="keterangan" ></textarea>
            </div>
			
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<?php
	foreach($dataArtikel as $row){
	?>
		<!--  Login form -->
		<div class="modal hide fade in" id="viewArtikel<?php echo $row['id_artikel'];?>" aria-hidden="false" style="width:900px;margin-left:-435px;">
			<div class="modal-header">
				<i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
				<h4>View Article</h4>
			</div>
			<!--Modal Body-->
			<div class="modal-body">
			<div id='captionSukses' style="background:url(<?php echo base_url('assets/images/loading.gif');?>) center top no-repeat;background-size: 250px;">
				
				<iframe src="<?php echo $row['isi']; ?>" style="top:0px; left:0px; bottom:0px; right:0px; width:100%; height:700px;; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
		  Your browser doesn't support IFrames
		</iframe>

			</div>	
			</div>
			<!--/Modal Body-->
		</div>
	<?php	
	}
?>
