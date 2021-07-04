<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_admin/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
	

<div class="right_col" role="main">
	<div class="">
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-user"></i></div>
              <div class="count"><?php echo $mahasiswa; ?></div>
              <h3>Mahasiswa</h3>
              <p>Jumlah mahasiswa terdaftar.</p>
            </div>
          </div>
          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-graduation-cap"></i></div>
              <div class="count"><?php echo $dosen; ?></div>
              <h3>Dosen</h3>
              <p>Jumlah dosen terdaftar.</p>
            </div>
          </div>
          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-file-text"></i></div>
              <div class="count"><?php echo $skripsi; ?></div>
              <h3>Skripsi</h3>
              <p>Jumlah skripsi masuk.</p>
            </div>
          </div>
          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-newspaper-o"></i></div>
              <div class="count"><?php echo $praktek; ?></div>
              <h3>Laporan Praktek</h3>
              <p>Jumlah Laporan kerja Praktek.</p>
            </div>
          </div>
      </div>

      <div>
        <h4><i class="fa fa-info-circle"></i> Notivikasi</h4>

            <!-- end of user messages -->
            <ul class="messages">
              <?php 
              foreach($data_parent as $list) {
                echo '<li>';
                echo '<div class="message_date">';
                echo '<h3 class="date text-info">24</h3>';
                echo '<p class="month">May</p>';
                echo '</div>';
                echo '<div class="message_wrapper">';
                echo '<h4 class="heading">'.$this->costume->get_full_name_user($list->user_id).'</h4>';
                echo '<blockquote class="message">'.$list->notiv_text.'</blockquote>';
                  
                echo '<br><p class="url">';
                echo '<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>';
                echo '<a href="'.base_url('admin/home/notiv/'.$list->id).'"><i class="fa fa-paperclip"></i> Lihat detail </a>';
                echo '</p></div></li>';
              }
              ?>
            </ul>
      </div>
 
  
  </div>
</div>


<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->