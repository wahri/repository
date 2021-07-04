<?php 
if(!empty($topik)){
?>
		<section id="feature" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-3 wow fadeInLeft delay-05s">
						<div class="section-title">
							<h2 class="head-title"><?php echo $topik->topik; ?></h2>
							<hr class="botm-line">
							<p class="sec-para"><?php echo $topik->keterangan; ?></p>
						</div>
					</div>
					<div class="col-md-9">
					<?php 
						$cek_topik = $this->costume->get_child_topik_home($topik->id);
						foreach ($cek_topik as $child) {
					?>
						<div class="col-md-6 wow fadeInRight delay-02s">
							<div class="icon">
							<?php
								$ikon = array("fa-paint-brush","fa-cogs","fa-mobile","fa-desktop","fa-lightbulb-o","fa-clock-o");
								$random_keys=array_rand($ikon);
								echo '<i class="fa '.$ikon[$random_keys].'"></i>';
							?>
							</div>
							<div class="icon-text">
								<h3 class="txt-tl"><?php echo $child->topik; ?></h3>
								<p class="txt-para"><?php echo $child->keterangan; ?></p>
							</div>
						</div>
					<?php
						}
					?>

				</div>
			</div>
			</div>
		</section>
		
<?php 
}
?>