<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
     
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
    background-color: #e9eff3;
    color: #695b5b;
    padding: 10px;
    }
  </style>
 
<div class="container">    
  <div class="row">
    <div class="col-sm-12">
	 <p class="lead">Dear <?php echo $to_full_name; ?></p>
	 <p>Thank you for registering at CELSCITECH International Conference</p>
	 <p class="lead">Your invoice number #<?php echo $invoice; ?> has been received</p>
	 <p>This is an e-mail notification to let you know that the charge on your payment invoice number #<?php echo $invoice; ?> has been received by the team on 2018.05.10 19:49. You are advised to contact team information.</p>
	 <div class="col-xs-12 text-muted well well-sm no-shadow" style="margin-top: 10px;">
		Payment information:
		<br>Invoice Number : <b>#<?php echo $invoice; ?></b>
		<br>Order Date : <b><?php echo $order_date;?></b>
		<br>total Amount : <b><?php echo $icon_;?><?php echo get_harga($totals); ?></b>
		<br>Transfer Date : <b><?php echo $tanggal; ?></b>
		<br>Bank Name : <b><?php echo $bank_name; ?></b>
		<br>Bank Account Name : <b><?php echo $bank_acount; ?></b>
		<br>Bank Account Number : <b><?php echo $bank_number; ?></b>
	</div>
	 <p>Please note that if no action is taken in Payment Protection, your bill will be completed automatically with the payment released.</p>
	 <br>
	 <div class="col-xs-12 text-muted well well-sm no-shadow" style="margin-top: 10px;">
		*contact
		<ul>
			<li>Website 	: celscitech.umri.ac.id</li>
			<li>Email		: celscitech@umri.ac.id</li>
			<li>Phone		: +62 82387420585 (Ranti Darwin)</li>
		</ul>
	</div>
	 <p>Sincerely,</p>
	 <p><a href="www.celscitech.umri.ac.id" target="_blank">celscitech.umri.ac.id</a></p>
	 <br>
	 <p class="text-center"><b>The Committee of <a href="<?php echo site_url(); ?>"> <?php echo $website_judul;?> </a> International Conference</b></p>
    </div>
  </div>
</div>
 
 
<footer class="container-fluid text-center">
  ?? Copyright <?php echo $website_copyright;?> - All rights reserved
</footer>