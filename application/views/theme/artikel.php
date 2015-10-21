<?php
	$this->load->view('theme/modal_artikel');
?>
<!--Slider-->
    <section id="services" >
     
	 <div class="container">
        <div class="left gap" style="width:720px; margin:0px auto;">
            <!-- <h3>What We Offer</h3> -->
			<?php
			
				foreach($dataArtikel as $row){
				?>
				
					<font size="3pt"><b><?php echo $row['judul_artikel'];?></b> | </font><font size="1pt"><b><i><?php $p=strtotime($row['tgl_buat']); echo date('D, d-M-Y', $p);?></i></b></font><br>
					<a href="#viewArtikel<?php echo $row['id_artikel'];?>" data-toggle="modal"><font size="2pt">Lihat Artikel >></font></a>
					<hr>
					
				<?php				
				}
			
			?>
			
			
		</div>
			</div>	
		<!-- /slider-wrapper -->           
	</section>
	<!--/Slider-->
	
	