    <div id="preloader">
      <div class="wrapper">
        <div class="cssload-loader"></div>
      </div>
    </div>

    <div class="top-search-area">
      <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
              <h3>Pencarian Data</h3>
              <p>Skripsi, Kerja Praktek.</p>
              <form action="<?php echo base_url('home/search'); ?>" method="post">
                <input type="text" name="search" value="" placeholder="Kata Kunci">
                <button type="submit" name="cari">Cari</button>
                <input type="hidden" name="paper" value="skripsi">
                <input type="hidden" name="by_select" value="abstrak">
                <button type="submit">Cari Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="login_wrapper">
            <div class="animate form login_form">
              <section class="login_content">
                <?php echo $this->session->flashdata('message'); ?>
                <form action="<?php echo site_url('login/login'); ?>" method="post">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
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
                    <button class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms" type="Submit">Login</button>
                  </div>
                  <div class="clearfix"></div>
                  <?php if (!empty($this->session->flashdata('success'))) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                      </button>
                      <strong>Error..!!</strong> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                  <?php } ?>

                  <!-- <div class="modal-footer d-flex justify-content-center">
                    <p class="change_link">
                      <a href="<?php echo site_url(); ?>" class="to_register"> Back to Home </a>
                    </p>
                    <div class="clearfix"></div>
                    <br />
                  </div> -->
                </form>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header class="header-area">
      <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
          <nav class="classy-navbar justify-content-between" id="uzaNav">
            <a class="nav-brand" href="<?php echo base_url(); ?>">
              <?php
              if (!empty($website_logo)) {
              ?>
                <img src="<?php echo base_url($website_logo); ?>" alt="<?php echo $website_judul; ?>">
              <?php
              } else {
              ?>
                <img src="<?php echo base_url('upload/system/logo_default.png'); ?>" alt="<?php echo $website_judul; ?>">
              <?php
              }
              ?>
            </a>

            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <div class="classy-menu">
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <div class="classynav">
                <ul id="nav">

                  <li class="current-item"><a href="<?php echo base_url('home'); ?>">Beranda</a></li>
                  <!---
                  <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="index-2.html">- Home</a></li>
                      <li><a href="about.html">- About</a></li>
                      <li><a href="services.html">- Services</a></li>
                      <li><a href="portfolio.html">- Portfolio</a></li>
                      <li><a href="portfolio-single.html">- Single Portfolio</a></li>
                      <li><a href="blog.html">- Blog</a></li>
                      <li><a href="single-blog.html">- Blog Details</a></li>
                      <li><a href="contact.html">- Contact</a></li>
                      <li>
                        <a href="#">- Dropdown</a>
                        <ul class="dropdown">
                          <li><a href="#">- Dropdown Item</a></li>
                          <li>
                            <a href="#">- Dropdown Item</a>
                            <ul class="dropdown">
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                              <li><a href="#">- Even Dropdown</a></li>
                            </ul>
                          </li>
                          <li><a href="#">- Dropdown Item</a></li>
                          <li><a href="#">- Dropdown Item</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  --->
                  <li><a href="<?php echo base_url('about'); ?>">Tentang</a></li>
                  <!--
                  <li>
                    <a href="#">Blog</a>
                    <ul class="dropdown">
                      <li><a href="blog.html">- Blog</a></li>
                      <li><a href="single-blog.html">- Blog Details</a></li>
                    </ul>
                  </li>
                -->
                  <li><a href="<?php echo base_url('contact'); ?>">Kontak</a></li>

                </ul>

                <!-- <div class="get-a-quote ml-4 mr-3">
                  <a href="<?php echo base_url('login'); ?>" class="btn uza-btn">Login</a>
                </div> -->

                <div class="get-a-quote ml-4 mr-3">
                  <a href="<?php echo base_url('login'); ?>" class="btn uza-btn" data-toggle="modal" data-target="#loginModal">Log In</a>
                </div>
                <!-- <div class="login-register-btn mx-3">
                  <a href="">Login</a>
                </div> -->
                <!-- <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                  <i class="icon_search"></i>
                </div> -->

              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>