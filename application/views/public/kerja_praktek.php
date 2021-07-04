<?php $this->load->view('public/lib/header'); ?>
<?php $this->load->view('public/lib/header_menu'); ?>
<div class="breadcrumb-area">
  <div class="breadcrumb-bg-curve">
    <img src="<?php echo base_url('themplate/uza/img/core-img/curve-5.png');?>" alt="">
  </div>
</div>
<section class="uza-contact-area ">
  <div class="container">
<div class="row justify-content-between">
  <div class="col-12 col-lg-8">
    <div class="uza-contact-form mb-80">
      <div class="contact-heading mb-50">
        <h4><?php echo $title;?></h4>
        <div class="border-line"></div>
      </div>
        <h6 class="text-muted">Abstrak</h6>
        <?php echo $abstrak;?>

        <h6 class="text-muted">Pustaka</h6>
        <?php echo $pustaka;?>
  
    </div>
  </div>
  <div class="col-12 col-lg-3">
    <div class="contact-sidebar-area mb-80">
      <div class="single-contact-card mb-50">
        <h4>View/Open</h4>
        <h6>
          <a href="<?php echo base_url($cover); ?>" target="_blank" ><i class="icon_documents"></i> cover </a></br>
          <a href="<?php echo base_url($bab_1); ?>" target="_blank" ><i class="icon_documents"></i> bab 1 </a></br>
        </h6>
      </div>
      <div class="single-contact-card mb-50">
        <h4>Author</h4>
        <h6><?php echo $penulis;?></h6>
        
      </div>
      <div class="single-contact-card mb-50">
        <h4>Date</h4>
        <h6><?php echo $tanggal;?></h6>
        
      </div>
    </div>
  </div>
</div>

  </div>
</section>



<?php $this->load->view('public/lib/footer_menu'); ?>
<?php $this->load->view('public/lib/footer'); ?>