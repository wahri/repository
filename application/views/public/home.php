<?php $this->load->view('public/lib/header'); ?>
<?php $this->load->view('public/lib/header_menu'); ?>

<section class="welcome-area">

  <div class="welcome-slides owl-carousel">
    <?php
    if (!empty($banner)) {
      foreach ($banner as $banner_list) {
    ?>

        <div class="single-welcome-slide">
          <div class="background-curve">
            <img src="<?php echo base_url('themplate/uza/img/core-img/curve-1.png'); ?>" alt="">
          </div>
          <div class="welcome-content h-100">
            <div class="container h-100">
              <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                  <div class="welcome-text">
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $banner_list->judul; ?></h2>
                    <h5 data-animation="fadeInUp" data-delay="400ms"><?php echo $banner_list->sub_judul; ?></h5>
                    <a href="<?php echo $banner_list->link; ?>" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms" data-toggle="modal" data-target="#searchModal">Cari Data</a>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="welcome-thumbnail">
                    <img src="<?php echo base_url($banner_list->gambar); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
      }
    } else {
      ?>

      <div class="single-welcome-slide">
        <div class="background-curve">
          <img src="<?php echo base_url('themplate/uza/img/core-img/curve-1.png'); ?>" alt="">
        </div>
        <div class="welcome-content h-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-6">
                <div class="welcome-text">
                  <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz <span>greater</span></h2>
                  <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                  <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="welcome-thumbnail">
                  <img src="<?php echo base_url('themplate/uza/img/bg-img/1.png'); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="single-welcome-slide">
        <div class="background-curve">
          <img src="<?php echo base_url('themplate/uza/img/core-img/curve-1.png'); ?>" alt="">
        </div>
        <div class="welcome-content h-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-6">
                <div class="welcome-text">
                  <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz <span>greater</span></h2>
                  <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                  <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="welcome-thumbnail">
                  <img src="<?php echo base_url('themplate/uza/img/bg-img/3.jpg'); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-welcome-slide">
        <div class="background-curve">
          <img src="<?php echo base_url('themplate/uza/img/core-img/curve-1.png'); ?>" alt="">
        </div>
        <div class="welcome-content h-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-6">
                <div class="welcome-text">
                  <h2 data-animation="fadeInUp" data-delay="100ms">Uza makes your <br> biz <span>greater</span></h2>
                  <h5 data-animation="fadeInUp" data-delay="400ms">We love to create "cool" things on Digital Platforms</h5>
                  <a href="#" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="welcome-thumbnail">
                  <img src="<?php echo base_url('themplate/uza/img/bg-img/4.jpg'); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo $this->session->flashdata('message'); ?>
            <form action="<?php echo site_url('login/login'); ?>" method="post">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <input type="text" name="identity" class="form-control" placeholder="Username" required>
                </div>
                <div class="md-form mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button class="btn uza-btn submit" type="Submit">Login</button>
              </div>
              <div class="clearfix"></div>
              <?php if (!empty($this->session->flashdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Error..!!</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php } ?>

              <div class="modal-footer d-flex justify-content-center">
                <p class="change_link">
                  <a href="<?php echo site_url(); ?>" class="to_register"> Back to Home </a>
                </p>
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- <section class="uza-newsletter-area">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-5 col-lg-5">
            <div class="nl-content mb-80">
              <h2>Pencarian Data</h2>
              <p>Skripsi, Kerja Praktek.</p>
            </div>
          </div>
          <div class="col-12 col-md-7 col-lg-7">
            <div class="nl-form mb-80">
              <form action="<?php echo base_url('home/search'); ?>" method="post">
                <input type="text" name="search" value="" placeholder="Kata Kunci">
                <button type="submit" name="cari">Cari Data</button>
                <input type="hidden" name="paper" value="skripsi">
                <input type="hidden" name="by_select" value="abstrak">
              </form>
            </div>
          </div>
        </div>
        <div class="border-line"></div>
      </div>
    </section> -->

  <!-- <?php $this->load->view('public/lib/footer_menu'); ?> -->
  <?php $this->load->view('public/lib/footer'); ?>