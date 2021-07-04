		<!-- GET IN TOUCH -->
		<section id="contact" class="section-padding section-row wow fadeInUp delay-02s animated text-center " id="portfolio" style="visibility: visible; animation-name: fadeInUp;">
			<div class="container">
				<div class="row">
					<div class="heading-about">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="wow bounceInDown" data-wow-delay="0.4s">
								<div class="section-heading">
									<h2>GET IN TOUCH</h2>
									<p class="sec-para">Please Contact Ours</p>
									<i class="fa fa-2x fa-angle-down"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container text-left">
				<div class="row">
					<div class="col-md-4" style="padding-left:0px;">
						<div class="col-md-12 col-sm-12" style="padding-left:0px;">
							<h3 class="cont-title">Committee Number Phone</h3>
							<div class="section-title">
								<select class="form-control">
							<?php 
								$no_commitee=1;
								foreach($commitee as $data_commitee){
									echo'<option>'.$no_commitee.'. '.$data_commitee->nama.', '.$data_commitee->telpon.'</option>';
									$no_commitee++;
								}
							?>
								</select>
							</div>
							<h3 class="cont-title">About</h3>
							<p class="sec-para">
								<?php echo $website_about;?>
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-12 col-sm-12" style="padding-left:0px;">
							<h3 class="cont-title">Email Us</h3>
							<div id="sendmessage">
								Your message has been sent. Thank you!
							</div>
							<div id="errormessage"> </div>
							<div class="contact-info">
								<form action="" role="form" class="contactForm">
									<div class="form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									<button type="submit" class="btn btn-send">Send</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h3 class="cont-title">Visit Us</h3>
						<address>
							<strong>LPPM - Muhammadiyah University Of Riau</strong><br>
							<?php echo $website_alamat;?>
						</address>
						<address>
							<strong>Email</strong><br>
							<a href="mailto:<?php echo $website_kontak;?>"><?php echo $website_kontak;?></a>
						</address>
					</div>
				</div>
			</div>
		</section>
		<!--/GET IN TOUCH--> 