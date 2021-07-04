<?php $this->load->view('theme/t_head'); ?>
<link href="<?php echo base_url('public/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet">
<?php $this->load->view('theme_member/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
<style>
@media print
{
.noprint {display:none;}
body:before {
        content: url(<?php echo base_url('upload/system/bg_print.png'); ?>) ;
        position: absolute;
    z-index: 1;
    text-align: center;
    width: 100%;
  margin-top: 30%;
      }
table, tbody, tr, th, td{
      background: 0 0 !important;
}
}

</style>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row noprint">
      <div class="col-xs-12 invoice-header">
        <h3><i class="fa fa-money"></i> <?php echo $title; ?></h3>
      </div>
    </div>
    <div class="x_title noprint"></div>
        <div class="row">
          
      <?php echo !empty($message) ? $message : ''; ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <br />
        <section class="content invoice">
                    <div class="row">
                        <div class="col-xs-12 invoice-header">
              <h1>
                                <i class="fa fa-globe"></i> Invoice.
                                <small class="pull-right">#<?php echo $invoice; ?></small>
                            </h1>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
              <strong>Order Date: <?php echo $order_date; ?></strong>
              <br>Bill From:
              <address>
                International Conference
                <br><strong><?php echo $website_judul;?></strong>
                <br><?php echo $website_deskripsi;?>
              </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
              Bill To:
              <address>
                <strong><?php echo $to_full_name; ?></strong>
                <br>Email: <?php echo $profile_user->email; ?>
                <br>Phone: <?php echo $profile_user->phone; ?>
              </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
              <h2><?php echo $website_judul;?></h2>
              <b><?php echo $website_deskripsi;?></b>
              <br>
              <?php echo $website_alamat; ?>
              <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 table">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Items</th>
                    <th style="width: 59%">Description</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="<?php echo base_url('/upload/system/BNI-Syariah.png'); ?>" alt="BNI" height="50px">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Via Bank Transfer Or Internet Banking Transfer
              </p>
              <ul>
                <li>Bank Name   : <b>BNI Syariah</b></li>
                <li>wift Code   : <b>SYNIIDJ1XX</b></li>
                <li>Branch    : <b>Kantor Cabang Pekanbaru</b></li>
                <li>Bank Account Name   : <b>CELSCITECH UMRI</b></li>
                <li>Bank Account Number   : <b>0535029045</b></li>
              </ul>
                        </div>
                        <div class="col-xs-6">
              <p class="lead">Total Amount</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td><?php echo $icon_; ?><?php echo get_harga($totals); ?></td>
                    </tr>
                    <tr>
                      <th>Tax</th>
                      <td><?php echo $icon_; ?>0</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td><?php echo $icon_; ?><?php echo get_harga($totals); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a href="<?php echo url_web('member/payment/confirm/'.$payment_id); ?>" class="btn btn-success pull-right noprint"><i class="fa fa-credit-card"></i> Confirm Payment</a>
              <button class="btn btn-default pull-right noprint noprint" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
              
                        </div>
            <div class="col-xs-12 text-muted well well-sm no-shadow" style="margin-top: 10px;">
              *Notes/Meno
              <br>1. Payment Confirmation can only be done through CELSciTech website
              <br>2. [IMPORTANT] Your registration will be canceled if you do not make payment and confirm until the specified date.
              <br>If you have any questions about this invoice, please contact:
              <ul>
                <li>Website   : celscitech.umri.ac.id</li>
                <li>Email   : celscitech@umri.ac.id</li>
                <li>Phone   : +62 82387420585 (Ranti Darwin)</li>
              </ul>
            </div>
                    </div>
                </section>
      </div>  
        </div>
    </div>
</div>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->