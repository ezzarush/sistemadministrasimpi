<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formAddArtikel" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Article </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('pengaturanArtikel/simpan_artikel'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Judul </label>
                <input type="text" name="judul" class="input-small" placeholder="Isikan Judul Artikel">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tgl.Buat </label>
                <input type="text" name="tgl_buat" class="input-small" placeholder="" disabled value="<?php echo date('Y-m-d');?>">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Isi Artikel </label>
				<textarea name="isi_artikel" cols="30" rows="7"></textarea>
            </div>
			
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>


<!--  Login form edit notulen -->
<div class="modal hide fade in" id="formEditArtikel" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Ubah Data </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('pengaturanArtikel/simpan_edit_artikel'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Judul </label>
                <input type="text" name="judul" id="idJudul" class="input-small" placeholder="">
				<input type="hidden" id="idArtikel" name="idArtikel">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Isi Artikel </label>
				<textarea name="isi_artikel_edit" cols="30" rows="7" id="idArtikelKeterangan"></textarea>
            </div>
			
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>


<!--  Login form edit notulen -->
<div class="modal hide fade in" id="formLihatArtikel" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Preview Artikel </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;"><b>Judul </b></label>
                <p id="idJudulArtikel"></p>
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;"><b>Isi Artikel </b></label>
				<p id="idIsiArtikel"></p>
            </div>
			
            <button class="btn btn-danger pull-right" data-dismiss="modal">Keluar</button>
    </div>
    <!--/Modal Body-->
</div>



<!--  Login form -->
<div class="modal hide fade in" id="frmHapusDataArtikel" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Hapus Dataa</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>pengaturanArtikel/hapus_artikel" method="post" id="form-login" align="center">
			<input type="hidden" id="txtIDArtikelHapus" name="txtIDArtikelHapus">
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


