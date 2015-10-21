<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formAddDataSuratKeluar" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Data Surat Keluar</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('surat/simpan_surat_keluar'); ?>" method="post" id="form-login">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
                <input type="text" name="perihal" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">No.Dokumen </label>
                <input type="text" name="nodok" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tanggal </label>
				<input class="datepicker" name="tanggal" data-date-format="mm/dd/yyyy" style="z-index:9999 !important;">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tujuan </label>
                <input type="text" name="tujuan" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Jenis Dokumen </label>
				<select name="jenisdok">
					<option>-- pilih jenis dokumen --</option>
					<option value="Asli">Asli</option>
					<option value="Copy">Copy</option>
					<option value="Copy Legalisir">Copy Legalisir</option>
				</select>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>



<!--  Login form -->
<div class="modal hide fade in" id="frmHapusDataSK" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Hapus Data</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>surat/hapus_surat_keluar" method="post" id="form-login" align="center">
			<input type="hidden" id="txtIDSKHapus" name="txtIDSKHapus">
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