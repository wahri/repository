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
	 <p>Dear <?php if(isset($email_nama)) { echo $email_nama; }?></p>
	 <p>We would like to thank you for submitting an abstract to CELSciTech International Conference. The editorial committee has now finalized the review of abstract that you submitted.</p>
     <p>We regret to inform you that at this stage your abstract does not meet the qualification to be published in proceeding (Scopus indexed). However, we would like to offer you an opportunity to publish your paper in our CELSciTech proceeding. In other words, you are eligible to present your paper title <b>"<?php if(isset($email_paper)) { echo $email_paper; }?>"</b> in CELSciTech International Conference and your paper will be published in <b>International Proceeding (Non Indexed – ISSN).</b></p>
	 <p>We look forward to hearing from you regarding our offer. To find out more, please contact:</p>
	 <dl class="dl-horizontal">
	  <dt>Mrs. Denny </dt>
		<dd>:+62 811-7520-204</dd>
	  <dt>Mrs. Dini </dt>
		<dd>:+62 821-7194-9565</dd>
	  <dt>Mr. Pahmi </dt>
		<dd>:+62 852-7453-5306</dd>
	</dl>
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