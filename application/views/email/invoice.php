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
	 <p class="lead">Dear <?php if(isset($to_full_name)) { echo $to_full_name; }?></p>
	 <p>Thank you for registering at CELSCITECH International Conference</p>
	 <div class="col-xs-12 text-muted well well-sm no-shadow" style="margin-top: 10px;">
		Invoice information:
		<br>Invoice Number : <b>#<?php if(isset($invoice)) { echo $invoice; }?></b>
		<br>Order Date : <b><?php if(isset($order_date)) { echo $order_date; }?></b>
		<br>total Amount : <b><?php echo $icon_;?><?php echo get_harga($totals); ?></b>
	</div>
	 <p>Be sure to confirm the payment through website, confirmation can only be done through CELSciTech website</p>

	 <p class="lead">Invoice detail:</p>
	 <table class="table table-striped">
		<thead>
			<tr>
				<td>QTY</td>
				<td>Items</td>
				<td>Description</td>
				<td>Subtotal</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>QTY</td>
				<td>Items</td>
				<td>Description</td>
				<td>Subtotal</td>
			</tr>
			<tr>
				<td><?php echo $qty_pre; ?></td>
				<td>Presenter</td>
				<td><b>Presenter</b> for paper title <?php echo $paper_title; ?></td>
				<td><?php echo $icon_; ?><?php echo get_harga($price_precenter); ?></td>
			</tr>
			<tr>
				<td><?php echo $qty_tour; ?></td>
				<td>City Tour</td>
				<td><b>City Tour</b> for paper title <?php echo $paper_title; ?></td>
				<td><?php echo $icon_; ?><?php echo get_harga($price_tour); ?></td>
			</tr>
			<?php 
				foreach($cek_tiket as $list_tiket){
					echo'<tr>';
					echo'<td>1</td>';
					echo'<td>Event tickets</td>';
					if($list_tiket->position == 1){
						echo'<td>For Author Name <b>'.$list_tiket->full_name.'</b></td>';
						if($paket == 1){
							echo'<td>'.$icon_.'30</td>';
						}else{
							echo'<td>'.$icon_.'0</td>';
						}
					}else{
						echo'<td>For Co Author Name <b>'.$list_tiket->full_name.'</b></td>';
						if($paket == 1){
							echo'<td>'.$icon_.'30</td>';
						}else{
							echo'<td>'.$icon_.''.get_harga(400000).'</td>';
						}
					}
					echo'<tr>';
				}
			?>
		</tbody>
	 </table>
	 
	 <p class="lead">Total Amount</p>
	 <table class="table">
		<tbody>
			<tr>
				<td><b>Subtotal</b></td>
				<td><?php echo $icon_; ?><?php echo get_harga($totals); ?></td>
			</tr>
			<tr>
				<td><b>Tax</b></td>
				<td><?php echo $icon_; ?>0</td>
			</tr>
			<tr>
				<td><b>Total</b></td>
				<td><?php echo $icon_; ?><?php echo get_harga($totals); ?></td>
			</tr>
		</tbody>
	 </table>
	 
	 <p class="lead">Payment Methods:</p>
	 <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
		Via Bank Transfer Or Internet Banking Transfer
	</p>
	<ul>
		<li>Bank Name 	: <b>BNI Syariah</b></li>
		<li>wift Code		: <b>SYNIIDJ1XX</b></li>
		<li>Branch		: <b>Kantor Cabang Pekanbaru</b></li>
		<li>Bank Account Name		: <b>CELSCITECH UMRI</b></li>
		<li>Bank Account Number		: <b>0535029045</b></li>
	</ul>
	<div class="col-xs-12 text-muted well well-sm no-shadow" style="margin-top: 10px;">
		*Notes/Meno
		<br>1. Payment Confirmation can only be done through CELSciTech website
		<br>2. [IMPORTANT] Your registration will be canceled if you do not make payment and confirm until the specified date.
		<br>If you have any questions about this invoice, please contact:
		<ul>
			<li>Website 	: celscitech.umri.ac.id</li>
			<li>Email		: celscitech@umri.ac.id</li>
			<li>Phone		: +62 82387420585 (Ranti Darwin)</li>
		</ul>
	</div>
	 <br>
	 <p class="text-center"><b>The Committee of <a href="<?php echo site_url(); ?>"> <?php echo $website_judul;?> </a> International Conference</b></p>
    </div>
  </div>
</div>
 
 
<footer class="container-fluid text-center">
  © Copyright <?php echo $website_copyright;?> - All rights reserved
</footer>