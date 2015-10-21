  <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo base_url();?>"><h3>Sistem Administrasi Hermina MPI</h3></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
						<?php
						if(empty($_SESSION['isLogin'])){
							
						}else{
							?>
							<li>
								<a data-toggle="modal" href="<?php echo base_url();?>"><i class="icon-home"></i></a>
							</li>
							<?php
							if($_SESSION['hakAkses']=='admin'){
							//admin	
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengaturan <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url();?>pengaturanPengguna">Pengguna</a></li>
									<li><a href="<?php echo base_url();?>pengaturanGaleri">Galeri</a></li>
									<li><a href="<?php echo base_url();?>pengaturanArtikel">Artikel</a></li>
									<li><a href="<?php echo base_url();?>pengaturanStrukturOrganisasi">Struktur Organisasi</a></li>
								</ul>
							</li>
							<?php
							}
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Surat <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url();?>surat/suratmasuk">Surat Masuk</a></li>
									<li><a href="<?php echo base_url();?>surat/suratkeluar">Surat Keluar</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notulen <i class="icon-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url();?>notulen">List Notulen</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="<?php echo base_url();?>jadwal">Jadwal</a>
							</li>
							<?php
						}
						?>
                        
						<?php
						if(empty($_SESSION['isLogin'])){
							?>
							<li class="dropdown">
								<a href="<?php echo base_url();?>strukturorganisasi">Struktur Organisasi</a>
							</li>
							<li class="dropdown">
								<a href="<?php echo base_url();?>artikel">Artikel</a>
							</li>
							<li class="dropdown">
								<a href="<?php echo base_url();?>galeri">Galeri</a>
							</li>
							<li class="login">
								<a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i> Login</a>
							</li>
							<li>
								<a data-toggle="modal" href="#loginDaftar">Sign Up</a>
							</li>
							<?php
						}else{
							?>
							<li class="login">
                            <a data-toggle="modal" href="#logoutForm"><i class="icon-lock"></i> Logout</a>
							</li>
							<?php
						}
						?>
                        
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
