<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_team/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>

<div class="right_col" role="main">
  <div class="">
    <div class="row">
		<div class="col-xs-12 invoice-header">
			<h1>
				<i class="fa fa-globe"></i> <?php echo $title; ?>
			</h1>
		</div>
	</div>

    <div class="clearfix"></div>
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
		</br>
			<form class="form-horizontal" action="<?php echo url_web('team/data_kosentrasi/edit/'.$id) ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-sm-8">
					  <?php echo form_input('nama',set_value('nama',$user->nama),'class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
					<div class="col-sm-8">
					  <?php echo form_textarea('keterangan',set_value('keterangan',$user->keterangan),'class="form-control"'); ?>
					</div>
				</div>
	
				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-sm-5 col-sm-offset-2">
					  <a href="<?php echo url_web('team/data_kosentrasi'); ?>" type="button" class="btn btn-primary">Batal</a>
					  <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>	
			</form>
		</div>
		
	</div>
  </div>
</div>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->