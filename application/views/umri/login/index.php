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
				<?php echo !empty($message) ? $message : ''; ?>
				<div class="block block-border-bottom-grey block-pd-sm">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<form action="" method="post" id="fileForm" role="form">
									<fieldset>
										<div class="form-group">
											<label for="phonenumber"><span class="req">* </span> Email or Username: </label>
											<?php echo form_input($identity); ?>
										</div>
										<div class="form-group">
											<label for="firstname"><span class="req">* </span> Password: </label>
											<?php echo form_input($password); ?>
										</div>
										<div class="form-group">
											<input type="checkbox" name="remember" id="remember">   
											<label for="terms">Remember Me</label>
										</div>
										<div class="form-group">
											<input class="btn btn-success" type="submit" name="submit_reg" value="Login">
										</div>
										<hr>
										<h5>Back to <a href="<?php echo site_url(); ?>">Home</a></h5>
										<h5>or <a href="<?php echo site_url('register'); ?>">Registration</a></h5>
									</fieldset>
								</form>
								<!-- ends register form -->
								<script type="text/javascript">
									document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
								</script>
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
