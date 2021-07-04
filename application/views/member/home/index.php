<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_member/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
  

<div class="right_col" role="main">
  <div class="">

      <div>
        <h4><i class="fa fa-info-circle"></i> Notivikasi</h4>

            <!-- end of user messages -->
            <ul class="messages">
              <?php 
              foreach($data_parent as $list) {
                echo '<li>';
                echo '<div class="message_date">';
                echo '<h3 class="date text-info">'.date("d",strtotime($list->tanggal)).'</h3>';
                echo '<p class="month">'.date("M",strtotime($list->tanggal)).'</p>';
                echo '</div>';
                echo '<div class="message_wrapper">';
                echo '<h4 class="heading">Admin</h4>';
                echo '<blockquote class="message">'.$list->notiv_text.'</blockquote>';
                  
                echo '<br><p class="url">';
                echo '<span class="fs1 text-info" aria-hidden="true" data-icon=""></span>';
                echo '<a href="'.base_url('member/home/notiv/'.$list->id).'"><i class="fa fa-paperclip"></i> Lihat detail </a>';
                echo '</p></div></li>';
              }
              ?>
            </ul>
      </div>
 
  
  </div>
</div>


<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->