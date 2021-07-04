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
     <h3 style="font-weight:bold">Congratulations!</h3>
	 <p>Dear <?php if(isset($email_nama)) { echo $email_nama; }?></p>
     <p>We’d like inform you that editorial committee has now finalized the review of paper title <b>“<?php if(isset($email_paper)) { echo $email_paper; }?>“</b> that you submitted. Congratulations on the acceptance of your paper! Please proceed to the next step which is making payment and confirm until the specified date.</p>
	 <p>Payment can be made to:</p>
	 <dl class="dl-horizontal">
	  <dt>Bank Name</dt>
		<dd>:BNI Syariah</dd>
	  <dt>Swift Code</dt>
		<dd>:SYNIIDJ1XXX</dd>
	  <dt>Branch</dt>
		<dd>:Kantor Cabang Pekanbaru</dd>
	  <dt>Bank Account Name</dt>
		<dd>:CELSCITECH UMRI</dd>
	  <dt>Bank Account Number</dt>
		<dd>:0535029045</dd>
	</dl>
	 <p>Be sure to confirm the payment through website!</p>
	 <p>We look forward to receiving your full paper and payment confirmation.</p>
	 <br>
	 <p>Sincerely,</p>
	 <br>
	 <p class="text-center"><b>The Committee of <a href="<?php echo site_url(); ?>"> <?php echo $website_judul;?> </a> International Conference</b></p>
    </div>
  </div>
</div>
 
 
<footer class="container-fluid text-center">
  © Copyright <?php echo $website_copyright;?> - All rights reserved
</footer>