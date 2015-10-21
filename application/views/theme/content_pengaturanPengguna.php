<?php 
	$this->load->view('theme/modal_notulen');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->
			
			<!--
			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddNotulen"><i class="icon-plus-sign"></i> &nbsp; Add</button>			
			</div>
			-->
			
			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama Lengkap</td>
						<td>NIP</td>
						<td>Alamat</td>
						<td>Username</td>
						<td>Hak Akses</td>
						<td>Status Aktif</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$num=1;
					foreach($dataNotulen as $row){
					?>
						<tr>
							<td><?php echo $num; ?></td>
							<td><?php echo $row['nama_lengkap']; ?></td>
							<td><?php echo $row['nip']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td>
							<?php
							if($row['hak_akses']=='admin'){
								?>
								<button data-toggle="modal" class="btn btn-primary" onClick=ubah_status_akun("<?php echo $row['id_pengguna']; ?>")><i class="icon-user"></i> ADMINISTRATOR</button>
								<?php
							}else{
								?>
								<button data-toggle="modal" class="btn btn-warning" onClick=ubah_status_akun("<?php echo $row['id_pengguna']; ?>")><i class="icon-user"></i> USER</button>
								<?php
							}
							?>
							</td>
							<td>
							<?php
							if($row['status_aktif']=='1'){
								?>
								<button data-toggle="modal" class="btn btn-success" onClick=ubah_status_aktif("<?php echo $row['id_pengguna']; ?>")><i class="icon-ok"></i> AKTIF</button>
								<?php
							}else{
								?>
								<button data-toggle="modal" class="btn btn-danger" onClick=ubah_status_aktif("<?php echo $row['id_pengguna']; ?>")><i class="icon-remove"></i> NON AKTIF</button>
								<?php
							}
							?>
							</td>
							<!--
							<td>
								<button data-toggle="modal" class="btn btn-primary" onClick=edit_notulen("<?php echo $row['id_notulen']; ?>")><i class="icon-edit"></i> Edit</button> &nbsp;
								<button data-toggle="modal" href="#frmHapusDataNotulen" onclick=hapus_notulen("<?php echo $row['id_notulen']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
							</td>-->
						</tr>
					<?php					
					$num++;
					}
				?>
				</tbody>
			</table>
			
        </div>
	</div>	
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->