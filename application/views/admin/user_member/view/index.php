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
			<h1><i class="fa fa-rss"></i> <?php echo $title; ?> </h1>
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
			    <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search">
					<div class="row">
						<div class="form-group">
							<div class="input-group">
								<input type="text" id="inputSearchArticle" data-href="<?php echo url_web('admin/user_member/search'); ?>" class="form-control" placeholder="Search By Username...">
								<span class="input-group-btn">
								  <button class="btn btn-default active" type="button">Go!</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="x_panel">
          
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Complete Name</th>
						  <th>Username</th>
						  <th>Email</th>
						  <th>Phone</th>
						  <th>Affliation</th>
						  <th>Country</th>
						  <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="tbodySearch">
                        <?php $this->load->view('admin/user_member/lib/list_page'); ?>
                      </tbody>
                    </table>
                  </div>
					<div class="row">
						<div class="col-sm-offset-5 col-sm-7">
							<div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
								<?php 
									echo $this->pagination->create_links();
								?>
							</div>
						</div>
					</div>
				  
				  
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