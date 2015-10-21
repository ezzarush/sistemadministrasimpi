<!--Slider-->
    <section id="services" >
     
	 <div class="container">
        <div class="center gap" style="width:620px; margin:0px auto;">
            <!-- <h3>What We Offer</h3> -->
			
			<div class="mygallery" style="margin:0px 0px; padding:0px;">
				<div class="tn3 album">
					<h4>Fixed Dimensions</h4>
					<div class="tn3 description">Images with fixed dimensions</div>
					<div class="tn3 thumb"><?php echo base_url();?>assets/images/tn3/35x35/1.jpg</div>
					<ol>
					<?php
						foreach($dataGaleri as $row){
						?>
							<li>
								<h4><?php echo $row['nama_foto'];?></h4>
								<div class="tn3 description"><?php echo $row['keterangan'];?></div>
								<a href="<?php echo base_url();?>assets/dokumen/<?php echo $row['url'];?>">
								<img src="<?php echo base_url();?>assets/dokumen/<?php echo $row['url'];?>" />
								</a>
							</li>
						<?php						
						}
					?>
					</ol>
				</div>
			</div>
			
			
		</div>
			</div>	
		<!-- /slider-wrapper -->           
	</section>
	<!--/Slider-->
	
	