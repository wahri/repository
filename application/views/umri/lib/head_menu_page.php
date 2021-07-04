		<!--header-->
		<header class="feature" id="header">
			<div class="bg-color">
				<!--nav-->
				<nav class="nav navbar-default navbar-fixed-top">
					<div class="container">
						<div class="col-md-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
								<span class="fa fa-bars"></span>
								</button>
								<a href="<?php echo site_url(); ?>" class="navbar-brand">
								<?php echo $website_judul;?></a>
							</div>
							<div class="collapse navbar-collapse navbar-right" id="mynavbar">
								<ul class="nav navbar-nav">
									<li class="active"><a href="<?php echo site_url(); ?>">HOME</a></li>
							<?php
								foreach ($main_menu as $main_menu_li) { 

										echo '<li><a href="'.site_url($main_menu_li->url_menu).'">'.$main_menu_li->nama_menu.'</a></li>';
			
								}
							?>
									
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--/ header-->
				<section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="cta-txt">
							<h3>CELSciTech PUBLICATION </h3>
							<p>See the published papers of the previous CELSciTech</p>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<a href="#" class="btn btn-submit">View Publications</a>
					</div>
				</div>
			</div>
		</section>