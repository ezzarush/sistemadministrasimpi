<?php 
	$this->load->view('theme/modal_surat_keluar');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->

			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddDataSuratKeluar"><i class="icon-plus-sign"></i> &nbsp; Add</button>			
			</div>

			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Perihal</td>
						<td>No.Dokumen</td>
						<td>Tanggal</td>
						<td>Tujuan</td>
						<td>Jenis Dokumen</td>
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
							<td><?php echo $row['no_surat_keluar']; ?></td>
							<td><?php echo $row['tgl_kirim']; ?></td>
							<td><?php echo $row['tujuan']; ?></td>
							<td><?php if($row['jenis_dokumen']=='Asli'){
								echo '<span class="label label-success">Asli</span>';
							}else if($row['jenis_dokumen'] == 'Copy'){
								echo '<span class="label label-primary">Copy</span>';
							}else{
								echo '<span class="label label-danger">Copy Legalisir</span>';
							} ?></td>
							<td>
								<button data-toggle="modal" class="btn btn-primary" onClick=edit_sk("<?php echo $row['id_surat_keluar']; ?>")><i class="icon-edit"></i> Edit</button>
								<button data-toggle="modal" href="#frmHapusDataSK" onclick=hapus_sk("<?php echo $row['id_surat_keluar']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
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