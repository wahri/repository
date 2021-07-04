<?php $this->load->view('public/lib/header'); ?>
<?php $this->load->view('public/lib/header_menu'); ?>
<div class="breadcrumb-area">
      <div class="container h-100">
        <div class="row h-100 align-items-end">
          <div class="col-12">
            <div class="breadcumb--con">
              <h2 class="title">Contact</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="breadcrumb-bg-curve">
        <img src="<?php echo base_url('themplate/uza/img/core-img/curve-5.png');?>" alt="">
      </div>
    </div>
    <section class="uza-contact-area section-padding-80">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 col-lg-6">
            <div class="uza-contact-form mb-80">
              <div class="contact-heading mb-50">
                <h4>Universitas Muhammadiyah Riau. <br><small class="text-muted">Tim informasi kami akan selalu siap untuk membantu anda mencari informasi yang anda butuhkan. Jangan pernah ragu untuk menghubungi kami melalui:</small></h4>
              </div>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control mb-30" name="full-name" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control mb-30" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control mb-30" name="full-name" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control mb-30" name="email" placeholder="Organization">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn uza-btn btn-3 mt-15">Contact Us</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="contact-sidebar-area mb-80">
              <div class="single-contact-card mb-50">
                <h4>GEDUNG KAMPUS 1 UMRI</h4>
                <h3>Phone(+62-761) 35008</h3>
                <h6>Jl. Kh. Ahmad Dahlan No. 88 Kelurahan Kp. Melayu Kecamatan Sukajadi</br>
                    Pekanbaru - Riau</h6>
                <h6>umri@umri.ac.id</h6>
              </div>
              <div class="single-contact-card mb-50">
                <h4>GEDUNG KAMPUS 2 UMRI</h4>
                <h3>Phone(+62-761) 35008</h3>
                <h6>Jl. Tuanku Tambusai / Jl. Nangka Kelurahan Delima Kecamatan Tampan</br>
                Pekanbaru - Riau</h6>
                <h6>umri@umri.ac.id</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php $this->load->view('public/lib/footer_menu'); ?>
<?php $this->load->view('public/lib/footer'); ?>