<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_admin/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>


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
					<a href="<?php echo url_web('admin/data_banner/add'); ?>" type="button" class="btn btn-default btn-sm btn-info">Tambah Data</a>	
				</div>
			    <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
					<div class="row">
						<div class="form-group">
							<div class="input-group">
								<input type="text" id="inputSearchArticle" data-href="<?php echo url_web('admin/data_banner/search'); ?>" class="form-control" placeholder="cari banner...">
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
						  <th>Gambar</th>
						  <th>Judul</th>
						  <th>Sub Judul</th>
						  <th>Link</th>
						  <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody id="tbodySearch">
					  
                        <?php 
							$this->load->view('admin/banner/lib/list_page'); 
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