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
 
  <div class="text-center">
	<img alt="<?php echo $website_judul; ?>" class="img-responsive" src="<?php echo base_url($this->costume->get_original($website_logo,'original')->row()->url); ?>" height="50px" title="<?php echo $website_judul; ?>">
  </div>
 <hr>
<div class="container">    
  <div class="row">
    <div class="col-sm-12">
     <h3 style="font-weight:bold"><?php if(isset($email_title)) { echo $email_title; }?></h3>
	 <p>Hi Refnal</p>
     <p><?php if(isset($email_descriptions)) { echo $email_descriptions; }?></p>
	 <br>
	 <p>Sincerely,</p>
	 <br>
	 <p class="text-center"><b>The Committee of CELSciTech 2018 International Conference</b></p>
    </div>
  </div>
</div>
 
 
<footer class="container-fluid text-center">
  © Copyright <?php echo $website_copyright;?> - All rights reserved
</footer>