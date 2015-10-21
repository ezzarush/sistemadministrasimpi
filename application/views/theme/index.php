<?php
	$this->load->view('theme/header');
?>
<body>

<?php
	$this->load->view('theme/menu');
?>  
    <?php
	//content dashboard
	if(empty($_SESSION['isLogin'])){
		if($this->uri->segment(1)=='galeri' || $this->uri->segment(2)=='galeri'){
		//body content Galeri
			$this->load->view('theme/galeri');
		}else if($this->uri->segment(1)=='StrukturOrganisasi' || $this->uri->segment(2)=='StrukturOrganisasi'){
		//body content Struktur Organisasi
			$this->load->view('theme/strukturorganisasi');			
		}else if($this->uri->segment(1)=='artikel' || $this->uri->segment(2)=='artikel'){
		//body content Artikel
			$this->load->view('theme/artikel');			
		}else{
	?>
		<!--Slider-->
    <section id="slide-show">
		 <div id="slider" class="sl-slider-wrapper">

			<!--Slider Items-->    
			<div class="sl-slider">
				<!--Slider Item1-->
				<div class="sl-slide item1">
					<div class="sl-slide-inner">
							<img style="width:100%;height:100%;" src="<?php echo base_url();?>assets/images/sample/slider/Untitled.jpg" alt="" />
							<h2>Creative Ideas</h2>
							<h3 class="gap">Tincidunt condimentum eros</h3>
							<a class="btn btn-large btn-transparent" href="#">Learn More</a>
					</div>
				</div>
				<!--/Slider Item1-->

		</div>
		<!--/Slider Items-->

		<!--Slider Next Prev button-->
		<nav id="nav-arrows" class="nav-arrows">
			<span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
			<span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
		</nav>
		<!--/Slider Next Prev button-->

	</div>
	<!-- /slider-wrapper -->           
	</section>
	<!--/Slider-->
	<?php	
		}
	}else{
		if($this->uri->segment(2)=='suratmasuk'){
		//body content surat masuk
			$this->load->view('theme/content_suratmasuk');
		}else if($this->uri->segment(2)=='suratkeluar'){
		//body content surat masuk
			$this->load->view('theme/content_suratkeluar');
		}else if($this->uri->segment(1)=='notulen' || $this->uri->segment(2)=='notulen'){
		//body content surat masuk
			$this->load->view('theme/content_notulen');
		}else if($this->uri->segment(1)=='jadwal' || $this->uri->segment(2)=='jadwal'){
		//body content jadwal
			$this->load->view('theme/content_jadwal');
		}else if($this->uri->segment(1)=='pengaturanPengguna' || $this->uri->segment(2)=='pengaturanPengguna'){
		//body content Pengaturan Pengguna
			$this->load->view('theme/content_pengaturanPengguna');
		}else if($this->uri->segment(1)=='pengaturanGaleri' || $this->uri->segment(2)=='pengaturanGaleri'){
		//body content Pengaturan Galeri
			$this->load->view('theme/content_pengaturanGaleri');
		}else if($this->uri->segment(1)=='pengaturanArtikel' || $this->uri->segment(2)=='pengaturanArtikel'){
		//body content Pengaturan Artikel
			$this->load->view('theme/content_pengaturanArtikel');
		}else if($this->uri->segment(1)=='pengaturanStrukturOrganisasi' || $this->uri->segment(2)=='pengaturanStrukturOrganisasi'){
		//body content Pengaturan Struktur Organisasi
			$this->load->view('theme/content_pengaturanStrukturOrganisasi');
		}else{
			$this->load->view('theme/dashboard');
		}
	?>
	
	<?php	
	}
	?>

<!-- <section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</h4>
                <p class="no-margin">Tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="http://shapebootstrap.net">Free Download Nova</a>
            </div>
        </div>
    </div>
</section> -->

<?php
	if(empty($_SESSION['isLogin'])){
		
		if($this->uri->segment(1)=='galeri' || $this->uri->segment(2)=='galeri'){
		//body content Galeri
		//	$this->load->view('theme/galeri');
		}else if($this->uri->segment(1)=='StrukturOrganisasi' || $this->uri->segment(2)=='StrukturOrganisasi'){
			
		}else if($this->uri->segment(1)=='artikel' || $this->uri->segment(2)=='artikel'){
		
		}else{

		
		?>
		<!--Services-->
			<section id="services">
				<div class="container">
					<div class="center gap">
						<!-- <h3>What We Offer</h3> -->
						<p class="lead">Look At Some Of The Recent Projects We Have Completed For Our Valuble Clients</p>
					</div>

					<div class="row-fluid">
						<div class="span4">
							<div class="media">
								<!-- <div class="pull-left">
									<i class="icon-globe icon-medium"></i>
								</div> -->
								<div class="media-body" style="border-radius: 25px;border: 2px solid #0773c3;padding: 20px;">
									<h4 class="media-heading" style="color:black;text-align:center;">Struktur Organisasi</h4>
									<p>
									<?php
										if(!empty($dataStrukturOrganisasi)){
										?>
											<a href="<?php echo base_url('strukturorganisasi');?>"><img src="<?php echo $dataStrukturOrganisasi[0]['isi'];?>"></img></a>
										<?php										
										}else{
										?>
							
										<?php
										}
									?>
									</p>
								</div>
							</div>
						</div>            

						<div class="span4">
							<div class="media">
								<!-- <div class="pull-left">
									<i class="icon-globe icon-medium"></i>
								</div> -->
								<div class="media-body" style="border-radius: 25px;border: 2px solid #0773c3;padding: 20px;">
									<h4 class="media-heading" style="color:black;text-align:center;">Artikel</h4>
									<div>
										<ul>
										<?php
											foreach($dataArtikel as $row){
											?>
											<li>
												<a href="<?php echo base_url('artikel');?>"><?php echo $row['judul_artikel'];?></a>
											</li>
											<?php											
											}
										?>
										</ul>
									</div>
								</div>
							</div>
						</div>           

						<div class="span4">
							<div class="media">
								<!-- <div class="pull-left">
									<i class="icon-globe icon-medium"></i>
								</div> -->
								<div class="media-body" style="border-radius: 25px;border: 2px solid #0773c3;padding: 20px;">
									<h4 class="media-heading" style="color:black;text-align:center;">Galeri</h4>
									<div>
										<?php
											if(empty($dataGaleri)){
											?>
												<img src="<?php echo base_url();?>assets/images/portfolio/1.jpg" width="150px" height="150px" style="margin:5px;">
												<img src="<?php echo base_url();?>assets/images/portfolio/2.jpg" width="150px" height="150px" style="margin:5px;">	
											<?php											
											}else{
												foreach($dataGaleri as $row){
												?>
												<a href="<?php echo base_url();?>galeri">
													<img src="<?php echo base_url();?>assets/dokumen/<?php echo $row['url'];?>" width="150px" height="150px" style="margin:5px;">
												</a>	
												<?php												
												}
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>

					

				</div>
			</section>
			<!--/Services-->
		<?php
		}
	}
?>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>login/login_proses" method="post" id="form-login">
			<input type="text" class="input-small" name="username" placeholder="Username">
            <input type="password" class="input-small" name="password" placeholder="Password">
            <button type="submit" class="btn btn-primary">Sign in</button>
            <label class="checkbox" style="margin-top:5px;" id="lblStatusLogin" align='center'>
                
            </label>
        </form>
        <a href="#">Forgot your password?</a>
	</div>	
    </div>
    <!--/Modal Body-->
</div>

<!--  Login form -->
<div class="modal hide fade in" id="logoutForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Logout Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>login/logout" method="post" id="form-login" align="center">
			
			Keluar Aplikasi?
			<br>
            <button type="submit" class="btn btn-primary">Ok</button>
			<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <label class="checkbox" style="margin-top:5px;" id="lblStatusLogin" align='center'>
                
            </label>
        </form>
        
	</div>	
    </div>
    <!--/Modal Body-->
</div>


<!--  Login form -->
<div class="modal hide fade in" id="frmHapusDataSM" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Hapus Data</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
	<div id='captionSukses'>
        <form class="form-inline" action="<?php echo base_url(); ?>surat/hapus_surat_masuk" method="post" id="form-login" align="center">
			<input type="hidden" id="txtIDSMHapus" name="txtIDSMHapus">
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


<!--  Login form sign up -->
<div class="modal hide fade in" id="loginDaftar" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Sign Up Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body" id="captionDaftar">
	
        <form class="form-inline" action="<?php echo base_url();?>main/daftarBaru" method="post" id="form-login">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">Nama Lengkap </label>
                <input type="text" class="input-small" name="nama_lengkap" placeholder="Isikan Nama Lengkap" required>
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">NIP </label>
                <input type="text" class="input-small" name="nip_nik" placeholder="Silakan masukan NIP atau NIK" required>
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">Alamat </label>
				<textarea style="width:190px;" name="alamat" class="input-small"></textarea>
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">Username </label>
                <input type="text" class="input-small" name="username" placeholder="Nama Pengguna" required>
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">Email </label>
                <input type="text" class="input-small" name="email" placeholder="Silakan masukkan E-Mail Aktif">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 130px;">password </label>
                <input type="password" class="input-small" name="password" placeholder="Silakan masukkan password" required>
            </div>
            
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formAddDataSuratMasuk" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Data Surat Masuk</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('surat/simpan_surat_masuk'); ?>" method="post" id="form-login">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
                <input type="text" name="perihal" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perusahaan </label>
                <input type="text" name="perusahaan" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Pengirim </label>
                <input type="text" name="pengirim" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">E-Mail </label>
                <input type="text" name="email" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tgl Masuk </label>
                <input class="datepicker" name="tglmasuk" data-date-format="yyyy-dd-mm" style="z-index:9999 !important;">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formEditDataSuratMasuk" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Edit Data Surat Keluar</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('surat/simpan_edit_surat_masuk'); ?>" method="post" id="form-login">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
				<input type="hidden" id="txtSM_id_surat_masuk" name="idSuratMasuk">
				
                <input type="text" id="txtSM_Perihal" name="perihal" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perusahaan </label>
                <input type="text" id="txtSM_perusahaan" name="perusahaan" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Pengirim </label>
                <input type="text" id="txtSM_pengirim" name="pengirim" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">E-Mail </label>
                <input type="text" id="txtSM_email" name="email" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tgl Masuk </label>
                <input class="datepicker" id="txtSM_tglMasuk" name="tglmasuk" data-date-format="yyyy-dd-mm" style="z-index:9999 !important;">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<!--  Login form edit notulen -->
<div class="modal hide fade in" id="formEditNotulen" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Add Data </h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('notulen/simpan_edit_notulen'); ?>" method="post" id="form-login" enctype="multipart/form-data">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
                <input type="text" name="perihal" id="idNotulenPerihal" class="input-small" placeholder="">
				<input type="hidden" id="idNotulenForm" name="idNotulen">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">No.Berkas / Surat </label>
                <input type="text" name="noberkassurat" id="idNotulenNoBerkasSurat" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tanggal Notulensi</label>
				<input class="datepicker" name="tanggal" id="idNotulenTanggal" data-date-format="yyyy/mm/dd" style="z-index:9999 !important;">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Jenis Dokumen </label>
				<select name="jenisdok" id="idNotulenJenisDokumen">
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
				<textarea name="keterangan" id="idNotulenKeterangan"></textarea>
            </div>
			
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<!--  Login form Tambah Data -->
<div class="modal hide fade in" id="formEditDataSuratKeluar" aria-hidden="false" style="z-index: 2000;">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form Edit Data Surat Keluar</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo base_url('surat/simpan_edit_surat_keluar'); ?>" method="post" id="form-login">
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Perihal </label>
				<input type="hidden" id="txtSK_id_surat_keluar" name="idSuratMasuk">
				
                <input type="text" id="txtSK_Perihal" name="perihal" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">No.Dokumen </label>
                <input type="text" id="txtSK_dokumen" name="nosurat" class="input-small" placeholder="">
            </div>
            <div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tanggal </label>
				<input class="datepicker" id="txtSK_tanggal" name="tglkeluar" data-date-format="yyyy-mm-dd" style="z-index:9999 !important;">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Tujuan </label>
                <input type="text" id="txtSK_tujuan" name="tujuan" class="input-small" placeholder="">
            </div>
			<div style="padding-left: 22px;margin-bottom: 5px;">
                <label style="width: 90px;">Jenis Dokumen </label>
				<select name="jenisdok" id="txtSK_jenisdok">
					<option>-- pilih jenis dokumen --</option>
					<option value="Asli" selected>Asli</option>
					<option value="Copy">Copy</option>
					<option value="Copy Legalisir">Copy Legalisir</option>
				</select>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <!--/Modal Body-->
</div>

<?php
	$this->load->view('theme/footer');
?>