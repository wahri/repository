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
							if($keys->doc_type == 'doc'){
								$gambar = base_url('upload/icon/doc.png');
							}else if($keys->doc_type == 'docx'){
								$gambar = base_url('upload/icon/docx.png');
							}else if($keys->doc_type == 'pdf'){
								$gambar = base_url('upload/icon/pdf.png');
							}else if($keys->doc_type == 'gif'){
								$gambar = base_url('upload/icon/gif.png');
							}else if($keys->doc_type == 'jpg'){
								$gambar = base_url('upload/icon/jpeg.png');
							}else if($keys->doc_type == 'jpeg'){
								$gambar = base_url('upload/icon/jpeg.png');
							}else if($keys->doc_type == 'mp4'){
								$gambar = base_url('upload/icon/mov.png');
							}else if($keys->doc_type == 'png'){
								$gambar = base_url('upload/icon/png.png');
							}else if($keys->doc_type == 'ppt'){
								$gambar = base_url('upload/icon/ppt.png');
							}else if($keys->doc_type == 'pptx'){
								$gambar = base_url('upload/icon/pptx.png');
							}else if($keys->doc_type == 'rar'){
								$gambar = base_url('upload/icon/rar.png');
							}else if($keys->doc_type == 'xls'){
								$gambar = base_url('upload/icon/xls.png');
							}else if($keys->doc_type == 'xlsx'){
								$gambar = base_url('upload/icon/xlsx.png');
							}else if($keys->doc_type == 'zip'){
								$gambar = base_url('upload/icon/zip.png');
							}else{
								$gambar = base_url('upload/icon/pdf.png');
							}
							
							echo'
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" alt="CHELScieTech Poster" src="'.$gambar.'" \>
								</a>
								<div class="media-body">
									<h4 class="media-heading">'.$keys->title.'</h4>
									'.$keys->description.'
									<br>
									<a href="'.base_url($keys->document).'" target="_blank" type="button" class="btn btn-xs btn-primary">download</a>
								</div>																							
							</div>
							<hr>';
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

