<?php 
	$this->load->view('theme/modal_pengaturanGaleri');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->

			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddPhoto"><i class="icon-plus-sign"></i> &nbsp; Add Photo</button>			
			</div>

			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama Foto</td>
						<td>Keterangan</td>
						<td>Tgl Upload</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$num=1;
					foreach($dataNotulen as $row){
					?>
						<tr>
							<td><?php echo $num; ?></td>
							<td><a target="_BLANK" href="<?php echo base_url('assets/dokumen').'/'.$row['url'];?>"><?php echo $row['nama_foto']; ?></a></td>
							<td><?php echo $row['keterangan']; ?></td>
							<td><?php echo $row['tgl_upload']; ?></td>
							<td>
								<button data-toggle="modal" href="#formEditGaleri" class="btn btn-primary" onClick=edit_galeri("<?php echo $row['id_galeri']; ?>")><i class="icon-edit"></i> Edit</button> &nbsp;
								<button data-toggle="modal" href="#frmHapusDataGaleri" onclick=hapus_galeri("<?php echo $row['id_galeri']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
							</td>
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