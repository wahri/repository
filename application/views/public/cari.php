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
      <div class="col-12 col-lg-12">
        <div class="uza-contact-form mb-80">
          <form action="<?php echo base_url('home/search'); ?>" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" class="form-control mb-30" name="search" value="<?php echo $search;?>" placeholder="Keywords">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Filter karya ilmiah:</label>
                  <div class="form-check">
                    <input type="radio" name="paper" value="skripsi" class="form-check-input" <?php if($paper_select =='skripsi'){echo 'checked';} ?>>
                    <label class="form-check-label" for="customRadio1">Dokumen Skripsi</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="paper" value="kerja_praktek" class="form-check-input" <?php if($paper_select =='kerja_praktek'){echo 'checked';} ?>>
                    <label class="form-check-label" for="customRadio2">Laporan Kerja Praktek</label>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <label for="exampleInputEmail1">Filter content:</label>
                <div class="form-check">
                  <input type="radio" name="by_select" value="abstrak" class="form-check-input" <?php if($by_select =='abstrak'){echo 'checked';} ?>>
                  <label class="form-check-label" for="customRadio1">Abstrak</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="by_select" value="judul" class="form-check-input" <?php if($by_select =='judul'){echo 'checked';} ?>>
                  <label class="form-check-label" for="customRadio2">Judul</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="cari" class="btn uza-btn btn-3 mt-15">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="comment_area mb-50 clearfix">
          <h5 class="title">Hasil Pencarian:</h5>
          <p class="text-muted"><?php echo $result_count;?></p>
          <ol>

<?php
if (!empty($paper_result)) {
  foreach ($paper_result as $list_arr) {
      $content          = get_content_excerpt($list_arr->abstrak, 500);
      $hasil_betul      = array();
      $hasil_salah      = array();

      foreach ($paper_parent as $key_patern => $value_patern) {
        if($by_select == 'judul'){
          $hasil_patern       = BoyerMoore_algo($list_arr->judul, $value_patern);
        }else{
          $hasil_patern       = BoyerMoore_algo($list_arr->abstrak, $value_patern);
        }
        
        if($hasil_patern != -1){
          $hasil_betul[] = $value_patern;
        }else{
          $hasil_salah[] =  $value_patern;
        }
      }

      if(count($hasil_betul) > count($hasil_salah)){
        
          foreach ($paper_parent as $strWord){
            $content = preg_replace('@(' . preg_quote($strWord, '@') . ')@i', "<b>\\1</b>", $content);
            $list_arr->judul = preg_replace('@(' . preg_quote($strWord, '@') . ')@i', "<b>\\1</b>", $list_arr->judul);
          }

          ?>

            <li class="single_comment_area">
                <div class="comment-content d-flex">
                  <div class="comment-author" style='font-size: 42px'>
                    <i class="icon_documents"></i>
                  </div>
                  <div class="comment-meta">
                    <a href="<?php echo base_url($paper_select.'/'.$list_arr->id); ?>"><h5><?php echo $list_arr->judul; ?></h5></a>
                    <span class="text-muted"><?php echo $list_arr->penulis; ?></span><br>

                    <?php echo $content; ?>
                               
                  </div>
                </div>
              </li>


          <?php

      }else{
          foreach ($paper_parent as $strWord){
            $content = preg_replace('@(' . preg_quote($strWord, '@') . ')@i', "<b>\\1</b>", $content);
            $list_arr->judul = preg_replace('@(' . preg_quote($strWord, '@') . ')@i', "<b>\\1</b>", $list_arr->judul);
          }

          ?>

            <li class="single_comment_area">
                <div class="comment-content d-flex">
                  <div class="comment-author" style='font-size: 42px'>
                    <i class="icon_documents"></i>
                  </div>
                  <div class="comment-meta">
                    <a href="<?php echo base_url($paper_select.'/'.$list_arr->id); ?>"><h5><?php echo $list_arr->judul; ?></h5></a>
                    <span class="text-muted"><?php echo $list_arr->penulis; ?></span><br>

                    <?php echo $content; ?>
                             
                  </div>
                </div>
              </li>


          <?php
        }
      
    }
   }

?>
          </ol>

          <nav aria-label="Page navigation example">
            <?php 
              echo $this->pagination->create_links();
            ?>
          </nav>

        
        </div>
        
      </div>
    </div>
  </div>
</section>



<?php $this->load->view('public/lib/footer_menu'); ?>
<?php $this->load->view('public/lib/footer'); ?>