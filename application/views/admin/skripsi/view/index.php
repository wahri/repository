<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_admin/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
<style>
.berita_aksi {
    opacity: 0; /* css standard */
    filter: alpha(opacity=0); /* internet explorer */
}

.berita_aksi:hover {
    opacity: 1; /* css standard */
    filter: alpha(opacity=100); /* internet explorer */
}
</style>

<div class="right_col" role="main">
  <div class="">
	<div class="row">
		<div class="col-xs-12 invoice-header">
			<h1><i class="fa fa-rss"></i> <?php echo $title; ?></h1>
		</div>
	</div>
    <div class="x_title"></div>
	
	<div class="row">
    <?php if (!empty($this->session->flashdata('success'))) { ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong>Pesan..!!</strong>  <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php }?>
	
		<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-8 col-sm-8 col-xs-12 form-group pull-left ">
					<div class="row">
					<form action="<?php echo site_url('admin/skripsi/index'); ?>" method="post">
						<div class="form-inline">
						  <div class="form-group">
							<select id="proses" name="proses" class="form-control input-sm">
								<option value="" >Semua Proccess</option>
								<option value="1" <?php if($proses_select == 1){ echo 'selected';}?> >Cek Validasi</option>
								<option value="2" <?php if($proses_select == 2){ echo 'selected';}?> >Menunggu Revisi data</option>
								<option value="3" <?php if($proses_select == 3){ echo 'selected';}?> >Selesai</option>									
							</select>
						  </div>
						  <div class="form-group">
							<select  id="topik" name="topik" class="form-control input-sm">
								<option value="">- pilihan kosentrasi -</option>
								<?php 
									foreach($data_karya as $r_karya){
										if($topik_select == $r_karya->id){
											echo '<option value="'.$r_karya->id.'" selected>'.$r_karya->nama.'</option>';
										}else{
											echo '<option value="'.$r_karya->id.'">'.$r_karya->nama.'</option>';
										}
									}
								?>
							  </select>
							</select>
						  </div>
						  <button type="submit" name="filter_button" class="btn btn-sm btn-info">Filter</button>
						  <?php 
							  if($reset_select == 1){
								  echo '<button type="submit" name="reset_button" class="btn btn-sm btn-default">Reset Filter</button>';
							  }
						  ?>
						</div>
					</form>
					</div>
					
				</div>
			    <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
					<div class="row">
						<div class="form-group">
							<div class="input-group">
								<input type="text" id="inputSearchArticle" data-href="<?php echo url_web('admin/skripsi/search'); ?>" class="form-control" placeholder="Cari Judul...">
								<span class="input-group-btn">
								  <button class="btn btn-default active" type="button">Go!</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="x_panel">
				<?php echo $result_count; ?>
                  <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Judul Skripsi</th>
						  <th>Penulis</th>
                          <th>Pembimbing</th>
						  <th>Status Proses</th>
						  <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody id="tbodySearch">
					  
                        <?php 
							$this->load->view('admin/skripsi/lib/list_page'); 
						?>
                      </tbody>
                    </table>
                  </div>
				  <nav id="nav-index">
						<?php 
							echo $this->pagination->create_links();
						?>
					</nav>
                </div>
		</div>
		
	</div>
  </div>
</div>
<script>


/*fungsi Pencarian*/
$('#inputSearchArticle').on('input', function (event) {
    var url = $(this).attr('data-href');
    var inputan = $(this).val();
    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        dataType: 'html',
        data: {
            search: inputan
        },
        success: function (msg) {
            $('#tbodySearch').html(msg);
        }
    });
});

</script>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->