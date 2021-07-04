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

        <h6 class="text-muted">Daftar Pustaka</h6>
        <?php echo $pustaka;?>
          
  
    </div>
  </div>
  <div class="col-12 col-lg-3">
    <div class="contact-sidebar-area mb-80">
      <div class="single-contact-card mb-50">
        <h4>Lihat dan Unduh</h4>
        <h6>
          <a href="<?php echo base_url($cover); ?>" target="_blank" ><i class="icon_documents"></i> Halaman Sampul </a></br>
          <a href="<?php echo base_url($bab_1); ?>" target="_blank" ><i class="icon_documents"></i> Bab 1 </a></br>
          <a href="<?php echo base_url($jurnal); ?>" target="_blank" ><i class="icon_documents"></i> Jurnal </a></br>
        </h6>
      </div>
      <div class="single-contact-card mb-50">
        <h4>Penulis</h4>
        <h6><?php echo $penulis;?></h6>
        
      </div>
      <div class="single-contact-card mb-50">
        <h4>Tanggal Terbit</h4>
        <h6><?php echo $tanggal;?></h6>
        
      </div>
    </div>
  </div>
</div>

  </div>
</section>



<?php $this->load->view('public/lib/footer_menu'); ?>
<?php $this->load->view('public/lib/footer'); ?>