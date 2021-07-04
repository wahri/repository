    <footer class="footer-area section-padding-80-0">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-80">
              <h4 class="widget-title">Contact Us</h4>
              <div class="footer-content mb-15">
                <?php echo $website_alamat; ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-80">
              <h4 class="widget-title">Quick Link</h4>
              <nav>
                <ul class="our-link">
                  <li><a href="<?php echo base_url() ;?>">Home</a></li>
                  <li><a href="<?php echo base_url('about') ;?>">About</a></li>
                  <li><a href="<?php echo base_url('contact') ;?>">Contact</a></li>
                  <li><a href="<?php echo base_url('login') ;?>">Login</a></li>
                </ul>
              </nav>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget mb-80">
              <h4 class="widget-title">About Us</h4>
              <p><?php echo $website_abaut; ?></p>
              <div class="copywrite-text mb-30">
                <p>&copy; Copyright 2019 <a href="<?php echo base_url(); ?>"><?php echo $website_copyright; ?></a>.</p>
              </div>
              <div class="footer-social-info">
                <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
          Copyright &copy;<script type="text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
        </div>
      </div>
    </footer>