<?php 
	$this->load->view('theme/modal_notulen');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="left gap">
            <!-- <h3>What We Offer</h3> -->

			<!--
			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddNotulen"><i class="icon-plus-sign"></i> &nbsp; Add</button>			
			</div>-->

			<form class="form-inline" action="<?php echo base_url('pengaturanStrukturOrganisasi/simpan_edit_informasi'); ?>" method="post" id="form-login" enctype="multipart/form-data">
				<div style="padding-left: 22px;margin-bottom: 5px;">
					<label style="width: 90px;">Judul </label>
					<input type="text" name="judul" size="60" placeholder="Isikan Judul Artikel" value="<?php echo $dataStrukturOrganisasi[0]['judul'];?>">
					<input type="hidden" name="idInformasi" value="<?php echo $dataStrukturOrganisasi[0]['id_strukturorganisasi'];?>">
				</div>
				<div style="padding-left: 22px;margin-bottom: 5px;">
					<label style="width: 90px;">Tgl.Buat </label>
					<input type="text" name="tgl_buat" class="input-small" placeholder="" disabled value="<?php echo date('Y-m-d');?>">
				</div>
				<div style="padding-left: 22px;margin-bottom: 5px;">
					<label style="width: 90px;">Isi Artikel </label>
					<a href="http://postimage.org/" target="_BLANK">Upload Gambar Disini</a>
					<textarea name="isi_informasi" style="width=500pt;" id="id_isi_artikel"><?php echo $dataStrukturOrganisasi[0]['isi'];?></textarea>
				</div>
				
				<button type="submit" class="btn btn-primary pull-right">Simpan</button>
			</form>
			
        </div>
	</div>	
<!-- /slider-wrapper -->           
</section>
<script>
	CKEDITOR.replace('id_isi_artikel');
</script>
<!--/Slider-->