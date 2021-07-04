		<!-- Section: Keynote SPEAKERS -->
<?php 
if(!empty($home_speakers)){
?>
		<section id="about" class="home-section text-center">
			<div class="heading-about">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="wow bounceInDown" data-wow-delay="0.4s">
								<div class="section-heading">
									<h2>KEYNOTE SPEAKERS</h2>
									<p class="sec-para">Speaker on <?php echo $website_judul;?></p>
									<i class="fa fa-2x fa-angle-down"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-5">
						<hr class="marginbot-50">
					</div>
				</div>
				<div class="row">
				
		<?php 
			foreach($home_speakers as $data_list){
		?>
					<div class="col-md-4">
						<div class="wow bounceInUp" data-wow-delay="0.2s">
							<div class="team boxed-grey">
								<div class="inner">
									<h4><?php echo $data_list->name; ?></h4>
									<div class="avatar"><img src="<?php echo base_url($this->costume->get_original($data_list->gambar,'original')->row()->url); ?>" alt="<?php echo $data_list->name; ?>" class="img-responsive img-circle" /></div>
									<p class="subtitle"><?php echo $data_list->institusi; ?> <br><?php echo $data_list->keterangan; ?></p>
								</div>
							</div>
						</div>
					</div>
		<?php
			}
		?>

				</div>
			</div>
		</section>
		<!-- /Section: KEYNOTE SPEAKERS -->
<?php 
}
?>