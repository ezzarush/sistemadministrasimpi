<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->

			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddDataSuratMasuk"><i class="icon-plus-sign"></i> &nbsp; Add</button>			
			</div>

			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Perihal</td>
						<td>Perusahaan</td>
						<td>Pengirim</td>
						<td>E-Mail</td>
						<td>Tanggal Masuk</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$num=1;
					foreach($dataSuratMasuk as $row){
					?>
						<tr>
							<td><?php echo $num; ?></td>
							<td><?php echo $row['perihal']; ?></td>
							<td><?php echo $row['perusahaan']; ?></td>
							<td><?php echo $row['pengirim']; ?></td>
							<td><?php echo $row['email_pengirim']; ?></td>
							<td><?php echo $row['tgl_masuk']; ?></td>
							<td>
								<button data-toggle="modal" class="btn btn-primary" onClick=edit_sm("<?php echo $row['id_surat_masuk']; ?>")><i class="icon-edit"></i> Edit</button>
								<button data-toggle="modal" href="#frmHapusDataSM" onclick=hapus_sm("<?php echo $row['id_surat_masuk']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
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