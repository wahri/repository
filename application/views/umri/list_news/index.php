<?php $this->load->view('umri/lib/head'); ?>
<?php $this->load->view('umri/lib/head_menu_page'); ?>


<div id="content">
    <div class="container" id="about">
		<div class="row">
			<!--main content-->
			<div class="col-md-9 col-md-push-3">
				<div class="page-header">
					<h1>
						<?php echo $title;?>
					</h1>
				</div>
				<div class="block block-border-bottom-grey block-pd-sm">
				<?php
					if(!empty($berita_kategori)){
						foreach($berita_kategori as $keys){
							echo'
							<div class="media">
								<a class="pull-left" href="'.site_url($keys->url_berita).'">';
								if ($keys->format_berita =='video'){
									if($keys->gambar_berita > 0){	
										echo'<img class="media-object" src="'.base_url($this->costume->get_thumbnail($keys->gambar_berita,'100x90')->row()->url).'" alt="'.$keys->judul_berita.'" />';
									}else{
										echo'<img class="media-object" src="https://i.ytimg.com/vi/'.$keys->video_id.'/hqdefault.jpg" alt="'.$keys->judul_berita.'" />';
									}
								}else{
									if($keys->gambar_berita > 0){
										echo'<img class="media-object" src="'.base_url($this->costume->get_thumbnail($keys->gambar_berita,'100x90')->row()->url).'" alt="'.$keys->judul_berita.'" />';
									}else{
										echo'<img class="media-object" src="'.base_url('upload/system/blank_100_90.jpg').'" alt="'.$keys->judul_berita.'" />';
									}
								}
							echo'
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="'.site_url($keys->url_berita).'">'.$keys->judul_berita.'</a></h4>
									'.get_content_excerpt($keys->isi_berita, 180).'
									<br>
									<a href="'.site_url($keys->url_berita).'" type="button" class="btn btn-xs btn-primary">Read More</a>
								</div>																							
							</div><hr>';
						}
					}
				?>
				
				<nav id="nav-index">
					<?php 
						echo $this->pagination->create_links();
					?>
				</nav>
				</div>
			</div>
			<!-- sidebar -->
			<div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
				<ul class="nav nav-pills nav-stacked">
					<li class="active">
						<a href="#" class="first">
						  <?php echo $sidebar_name;?>
						  <small><?php echo $sidebar_description;?></small>
						</a>
					</li>
				</ul>
			</div>
		</div>
    </div>
</div>
  <!-- Call out block -->

<?php $this->load->view('umri/lib/home_sponsor'); ?>
<?php $this->load->view('umri/lib/home_footer'); ?>

