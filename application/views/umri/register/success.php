<?php $this->load->view('umri/lib/head'); ?>
<?php $this->load->view('umri/lib/head_menu_page'); ?>


<div id="content">
    <div class="container" id="about">
		<div class="row">
			<!--main content-->
			<div class="col-md-9 col-md-push-3">
				<div class="page-header">
					<h1>
						<?php echo $title;?><br>
						<small><?php echo $sub_title;?></small>
					</h1>
				</div>

				<div class="block block-border-bottom-grey block-pd-sm">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<dl class="dl-horizontal">
									<dt>Name:</dt>
									<dd><?php echo $your_name; ?></dd>
									<dt>Email:</dt>
									<dd><?php echo $your_email; ?></dd>
									<dt>Phone:</dt>
									<dd><?php echo $your_phone; ?></dd>
									<dt>Username:</dt>
									<dd><?php echo $your_username; ?></dd>
								</dl>
								<div class="block-highlight block-pd-h block-pd-sm">
									<h4 class="block-title">
										Press the continue button to log in 
									  </h4>
									<div class="form-group">
										<a href="<?php echo site_url('login'); ?>" class="btn btn-success" type="button">Log In</a>
									</div>
								</div>
							</div>
							<!-- ends col-6 -->
						</div>
					</div>
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
