<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formAddPhoto" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Photo </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('pengaturanGaleri/simpan_foto'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Nama Foto </label>
                <input type="text" name="nama_foto" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tgl.Upload </label>
                <input type="text" name="tgl_upload" class="input-small" placeholder="" disabled value="<?php echo date('Y-m-d');?>">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Lampiran </label>
				<input type="file" name="lampiran">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Keterangan </label>
				<textarea name="keterangan" ></textarea>
            </div>
			
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>


<!--  Login form edit notulen -->
<div class="modal hide fade in" id="formEditGaleri" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Ubah Data </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('pengaturanGaleri/simpan_edit_foto'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Nama Foto </label>
                <input type="text" name="nama_foto" id="idNama_Foto" class="input-small" placeholder="">
				<input type="hidden" id="idGaleri" name="idGaleri">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Keterangan </label>
				<textarea name="keterangan" id="idNotulenKeterangan"></textarea>
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">File Foto </label>
				<input type="file" name="lampiran">
            </div>
			
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>


<!--  Login form -->
<div class="modal hide fade in" id="frmHapusDataGaleri" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Hapus Data</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>pengaturanGaleri/hapus_galeri" method="post" id="form-login" align="center">
			<input type="hidden" id="txtIDGaleriHapus" name="txtIDGaleriHapus">
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


