<?php $this->load->view('umri/lib/head'); ?>
<?php $this->load->view('umri/lib/head_menu_page'); ?>
<style>
.wp-caption {
    background: #fff;
    border: 1px solid #f0f0f0;
    max-width: 96%;
    padding: 5px 3px 10px;
    text-align: center;
}
.wp-caption img {
    border: 0 none;
    height: auto;
    margin: 0;
    max-width: 98.5%;
    padding: 0;
    width: auto;
}
</style>

<div id="content">
    <div class="container" id="about">
		<div class="row">
			<!--main content-->
			<div class="col-md-9 col-md-push-3">
				<div class="page-header">
					<h1>
						<?php 
							if(!empty($lead_title)){
								echo'<small>'.$lead_title.'</small><br>';
							}
						?>
						<?php echo $lead_title;?>
						<?php echo $title;?>
					</h1>
				</div>
				<div class="block block-border-bottom-grey block-pd-sm">
					<div class="ktz-inner-metasingle"> 
						<span class="entry-author vcard">
							<span class="glyphicon glyphicon-eye-open"></span> 
							<?php echo $view_berita ?> Views
						</span> 
						<span class="entry-author vcard">
							<span class="glyphicon glyphicon-user"></span> 
							<?php echo $user_berita ?>
						</span> 
						<span class="entry-date updated">
							<span class="glyphicon glyphicon-time"></span> 
							<time datetime="<?php echo $tanggal_berita ?>" pubdate=""><?php echo tgl_indo_timestamp($tanggal_berita); ?> WIB</time>
						</span>
						<hr>
					</div>
					<div id="attachment_8" class="wp-caption alignnone">
						<img class="wp-image-8 size-full" src="<?php echo $image_og; ?>" alt="<?php echo $title;?>" width="780" height="439" >
						<p class="wp-caption-text"><?php echo $ket_gambar; ?></p>
					</div>
					<?php echo $content ?>
					<br>
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

