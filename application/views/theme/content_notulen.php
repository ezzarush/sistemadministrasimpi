<?php 
	$this->load->view('theme/modal_notulen');
?>
<!--Slider-->
    <section id="services">
     
	 <div class="container">
        <div class="center gap">
            <!-- <h3>What We Offer</h3> -->

			<div align="right" style="margin-bottom:5px;">
				<button class="btn btn-primary" data-toggle="modal" href="#formAddNotulen"><i class="icon-plus-sign"></i> &nbsp; Add</button>			
			</div>

			<table id="tableSuratMasuk" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<td>No</td>
						<td>Perihal</td>
						<td>No.Berkas / Surat</td>
						<td>Tanggal</td>
						<td>Dokumen</td>
						<td>Lampiran</td>
						<td>Keterangan</td>
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
							<td><?php echo $row['deskripsi']; ?></td>
							<td><?php echo $row['no_berkas_surat']; ?></td>
							<td><?php echo $row['tgl_notulen']; ?></td>
							<td><?php echo $row['jenis_dokumen']; ?></td>
							<td>
							<?php
							if($row['lampiran']=='' || $row['lampiran'] == null){
								?>
								<a href="#" class="btn btn-default" disabled>Tidak Ada Dokumen</a>
								<?php
							}else{
								?>
								<a target="_BLANK" href="<?php echo base_url('assets/dokumen/').'/'.$row['lampiran'];?>" class="btn btn-primary">Unduh Dokumen</a>
								<?php
							}
							?>
							</td>
							<td><?php echo $row['keterangan']; ?></td>
							<td>
								<button data-toggle="modal" class="btn btn-primary" onClick=edit_notulen("<?php echo $row['id_notulen']; ?>")><i class="icon-edit"></i> Edit</button> &nbsp;
								<button data-toggle="modal" href="#frmHapusDataNotulen" onclick=hapus_notulen("<?php echo $row['id_notulen']; ?>") class="btn btn-danger"><i class="icon-trash"></i> Delete</button>
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