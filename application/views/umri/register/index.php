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
											<label for="phonenumber"><span class="req">* </span> Phone Number: </label>
											<?php echo form_input($phone); ?>
										</div>
										<div class="form-group">
											<label for="firstname"><span class="req">* </span> First name: </label>
											<?php echo form_input($firstname); ?>
										</div>
										<div class="form-group">
											<label for="lastname"> Last name: </label> 
											<?php echo form_input($lastname); ?>
										</div>
										<div class="form-group">
											<label for="email"><span class="req">* </span> Email Address: <small><?php echo $cek_email; ?></small> </label> 
											<?php echo form_input($email); ?>
										</div>
										<div class="form-group">
											<label for="username"><span class="req">* </span> User name:  <small><?php echo $cek_username; ?></small> </label> 
											<?php echo form_input($username); ?>
										</div>
										<div class="form-group">
											<label for="username"><span class="req">* </span> Country: </label> 
											<select class="form-control" name="country" id="country" required>
												<option value="">-Select your country-</option>
												<?php
													foreach($country_list as $negara){
													echo '<option value="'.$negara->name.'">'.$negara->name.'</option>';
													}
												?>
											</select>
										</div>
										<div class="form-group">
											<label for="password"><span class="req">* </span> Password: </label>
											<?php echo form_input($password); ?>
										</div>
										<div class="form-group">	
											<label for="password"><span class="req">* </span> Confirm Password: </label>
											<?php echo form_input($password_confirm); ?>
										</div>
										<div class="form-group">
											<hr>
											<input type="checkbox" <?php if($confirm == 1){echo"checked";} ?> required name="confirm" value="1" id="confirm">   
											<label for="terms">I agree with the <a href="#" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
										</div>
										<div class="form-group">
											<input class="btn btn-success" type="submit" name="submit_reg" value="Register">
										</div>
										<h5>You will receive an email to complete the registration and validation process. </h5>
										<h5>Be sure to check your spam folders. </h5>
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
