<!-- Section: Download-->
		<section class="section-padding wow fadeInUp delay-02s animated" id="portfolio" style="visibility: visible; animation-name: fadeInUp;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="section-title">
							<h2 class="head-title">DOWNLOAD</h2>
							<hr class="botm-line">
							<p class="sec-para">It is an international educational activity for academics, teachers and educators. 
								This conference is now a well
							</p>
							<a href="<?php echo site_url('download'); ?>" class="btn btn-info" role="button">Download More</a>
						</div>						
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="section-title">
							<h2 class="head-title">CONFERENCE FEES</h2>
							<hr class="botm-line">
							<p class="sec-para">Fees for this year's conference are catered to how you will participate.
							</p>
							<a href="<?php echo site_url('page/conference-fees'); ?>" class="btn btn-info" role="button">Read More</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
					<?php 
						if(!empty($important_updates)){
							echo '<img src="'.base_url($this->costume->get_original($important_updates->gambar,'original')->row()->url).'" class="img-responsive" alt="" />';
						}
					?>		
					</div>
				</div>
			</div>
		</section>
		<!---->