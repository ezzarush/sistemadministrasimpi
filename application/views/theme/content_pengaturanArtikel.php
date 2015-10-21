<?php 
	$this->load->view('theme/modal_pengaturanArtikel');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->

			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddArtikel"><i class="icon-plus-sign"></i> &nbsp; Add Article</button>			
			</div>

			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Judul Artikel</td>
						<td>Tgl Buat</td>
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
							<td><?php echo $row['judul_artikel']; ?></td>
							<td><?php echo $row['tgl_buat']; ?></td>
							<td width="20%">
								<button data-toggle="modal" href="#formLihatArtikel" class="btn btn-primary" onClick=lihat_artikel("<?php echo $row['id_artikel']; ?>")><i class="icon-edit"></i> Preview</button> &nbsp;
								<button data-toggle="modal" href="#formEditArtikel" class="btn btn-primary" onClick=edit_artikel("<?php echo $row['id_artikel']; ?>")><i class="icon-edit"></i> Edit</button> &nbsp;
								<button data-toggle="modal" href="#frmHapusDataArtikel" onclick=hapus_artikel("<?php echo $row['id_artikel']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
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