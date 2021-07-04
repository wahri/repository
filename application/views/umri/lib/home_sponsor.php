<?php 
if(!empty($sponsor)){
?>
		<section id="sponsor" class="home-section text-center">
			<div class="container">
				<div class="row">
				<?php 
					foreach($sponsor as $data_sponsor){
						echo '<div class="col-md-2 col-sm-6">
								<a href="'.$data_sponsor->link_sponsor.'">
									<img class="img-fluid d-block mx-auto" src="'.base_url($this->costume->get_original($data_sponsor->gambar,'original')->row()->url).'" alt="">
								</a>
							</div>';
					}
				?>
				</div>
			</div>
		</section>
<?php 
}
?>