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
     <h3 style="font-weight:bold">Abstract Revision</h3>
	 <p>Dear <?php if(isset($email_nama)) { echo $email_nama; }?></p>
     <p>We would like to inform you that the abstract <b>“<?php if(isset($email_paper)) { echo $email_paper; }?>“</b> you sent has been reviewed and needs some revision.  Please submit the revised version of your abstract on Monday, <b>May 28th 2018</b> the latest.</p>
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