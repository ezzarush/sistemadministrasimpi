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



<!--  Login form -->
<div class="modal hide fade in" id="frmHapusDataNotulen" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Hapus Data</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>notulen/hapus_notulen" method="post" id="form-login" align="center">
			<input type="hidden" id="txtIDNotulenHapus" name="txtIDNotulenHapus">
			Yakin Hapus Data?
			<br>
            <button type="submit" class="btn btn-primary">Lanjutkan</button>
			<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <label class="checkbox" style="margin-top:5px;" id="lblStatusLogin" align='center'>
                
            </label>
        </form>
        
	</div>	
    </div>
    <!--/Modal Body-->
</div>


