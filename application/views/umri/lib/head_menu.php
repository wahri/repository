		<?php foreach($home_banner as $banner_home); ?>
		
		<style>
		.main-header {
			background: url(<?php echo base_url($this->costume->get_original($banner_home->gambar,'original')->row()->url); ?>) no-repeat;
			background-size: cover;
			min-height: 610px;
		}
		
		/*  running text-center */
		
		marquee {
			margin-top: 5px;
			width: 100%;
		}

		.runtext-container {
			/* background-color: #ddddff; */
			background-image: -moz-linear-gradient(top,#ccf,#fff);
			/* background-image: -webkit-gradient(linear,0 0,0 100%,from(#ccf),to(#fff)); */
			/* background-image: -webkit-linear-gradient(top,#ccf,#fff); */
			background-image: -o-linear-gradient(top,#ccf,#fff);
			/* background-image: linear-gradient(to bottom,#ccf,#fff); */
			/* background-repeat: repeat-x; */
			/* border: 4px solid #000000; */
			/* box-shadow: 0 5px 20px rgba(0, 0, 0, 0.9); */
			/* width: 850px; */
			overflow-x: hidden;
			overflow-y: visible;
			/* margin: 0 60px 0 30px; */
			padding: 0 3px 0 3px;
		}

		.main-runtext {
			margin: 0 auto;
			overflow: visible;
			position: relative;
			/* height: 40px; */
		}

		.runtext-container .holder {
			position: relative;
			overflow: visible;
			display:inline;
			float:left;
		}

		.runtext-container .holder .text-container {
			display:inline;
		}

		.runtext-container .holder a{
			text-decoration: none;
			font-weight: bold;
			color:#ff0000;
			text-shadow:0 -1px 0 rgba(0,0,0,0.25);
			line-height: -0.5em;
			font-size:16px;
		}

		.runtext-container .holder a:hover{
			text-decoration: none;
			color:#6600ff;
		}
		
		
		</style>
		
		<!--header-->
		<header class="main-header" id="header">
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
					
					<!-- running text-->
					<div class="container">
						<div class="col-md-12">
							<div class="runtext-container">
								<div class="main-runtext">
									<marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

										<div class="holder">

											<div class="text-container">
												&nbsp; &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="#" title="">Dear presenters. Thank you for submitting your abstract to CELSciTech 2018. Due to overwhelming number of submissions,</a>
											</div>
	
											<div class="text-container">
												&nbsp; &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="#" title="">we'd like to apologize for being unable to announce the result on the specified date. </a>
											</div>
											
											<div class="text-container">
												&nbsp; &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="#" title="">The reviewing team needs more time. We'll notify you once the review process is completed.</a>
											</div>
											
											<div class="text-container">
												&nbsp; &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox" href="#" title="">Thank you for your patience.</a>
											</div>
    
										</div>

									</marquee>
								</div>
							</div>
						</div>
					</div>
					<!-- end running text-->
					
				</nav>
				<!--/ nav-->
				<div class="container text-center">
					<div class="wrapper wow fadeInUp delay-05s">
						<h2 class="top-title"><?php echo $banner_home->top_title; ?></h2>
						<h3 class="title"><?php echo $banner_home->title; ?></h3>
						<h4 class="sub-title"><?php echo $banner_home->sub_title; ?></h4>
						<a href="<?php echo $banner_home->link_barner; ?>" type="button" class="btn btn-submit"><?php echo $banner_home->text_link; ?></a>
					</div>
				
				</div>
			</div>
		</header>
		<!--/ header-->