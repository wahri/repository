<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_admin/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
<style>
ul.list-image-media {
    list-style-type: none;
}

.list-image-media li {
    display: inline-block;
}

input[type="checkbox"][id^="check-"] {
    display: none;
}

input[type="radio"][id^="check-"] {
    display: none;
} 

label.select_image {
    border: 1px solid #fff;
    padding: 10px;
    display: block;
    position: relative;
    margin: 10px;
    cursor: pointer;
}

label.select_image:before {
    background-color: white;
    color: white;
    content: " ";
    display: block;
    border-radius: 50%;
    border: 1px solid #3c8dbc;
    position: absolute;
    top: -5px;
    left: -5px;
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 28px;
    transition-duration: 0.4s;
    transform: scale(0);
}

label.select_image img {
    height: 100px;
    width: 100px;
    transition-duration: 0.2s;
    transform-origin: 50% 50%;
}

:checked + label.select_image {
    border-color: #3c8dbc;
    /* background: #3c8dbc; */
}

:checked + label.select_image:before {
    content: "✔";
    background-color: #3c8dbc;
    transform: scale(1);
}

:checked + label.select_image img {
    transform: scale(0.9);
    box-shadow: 0 0 5px #3c8dbc;
    z-index: -1;
}
</style>
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
			<form class="form-horizontal" action="<?php echo url_web('admin/setting/index') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Tittle</label>
					<div class="col-sm-8">
					  <?php echo form_input($judul); ?>
					  <p class="help-block">Nama ini akan tampil di title website anda</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-8">
					  <?php echo form_input($deskripsi); ?>
					  <p class="help-block">Dalam beberapa kata, jelaskan tentang apa situs ini.</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">About (Tentang Kami)</label>
					<div class="col-sm-8">
					  <?php echo form_input($tentang); ?>
					  <p class="help-block">Ceritakan tentang situs anda, max 255 karakter</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Logo Website</label>
					<div class="col-sm-8">
					  <div class="form-group">
						<input id="logo_website" class="form-control" type="file" name="logo_website">
						<p class="help-block">Logo akan tampil pada header situs anda</p>
					  </div>
					  <?php
					  if (!empty($id_fitur)) { ?>
							<div class="thumbnail">
							  <img id="imageDetailFieture" src="<?php echo $featuredimage; ?>" alt="">
							  <input id="image_fitur" type="hidden" name="image_fitur" value="<?php echo $featuredimage; ?>" />
							  <input id="id_fitur" type="hidden" name="id_fitur" value="<?php echo $id_fitur; ?>" />
							</div>
					<?php 
						}else{ ?>
							<div class="thumbnail">
							  <img id="imageDetailFieture" src="<?php echo base_url('upload/system/logo_default.png'); ?>" alt="">
							  <input id="image_fitur" type="hidden" name="image_fitur" value="" />
							  <input id="id_fitur" type="hidden" name="id_fitur" value="" />
							</div>
					<?php 
						}
					?>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Copyright</label>
					<div class="col-sm-8">
					  <?php echo form_input($copyright); ?>
					  <p class="help-block">Hak cipta situs anda.</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Company</label>
					<div class="col-sm-8">
					  <?php echo form_input($company); ?>
					  <p class="help-block">Nama Perusahaan atau instansi anda.</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
					<div class="col-sm-8">
					  <?php echo form_textarea($alamat); ?>
					  <p class="help-block">Masukkan alamat lengkap dari perusahaan anda.</p>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Contact</label>
					<div class="col-sm-5">
					  <?php echo form_input($kontak); ?>
					  <p class="help-block">info kontak perusahaan anda.</p>
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-sm-5 col-sm-offset-2">
						<button type="submit" class="btn btn-success">Simpan Setting</button>
					</div>
				</div>
			</form>
		</div>
		
	</div>
  </div>
</div>
<!-- Modal -->
    <div class="modal fade" id="modalAddMedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>

<script>
/*Settiig height ketika modal diload untuk media gallery*/
	$('#modalAddMedia').on('show.bs.modal', function () {
		$('.modal-body').css('height', $(window).height() * 0.6);
	});

	/*Settiig height ketika modal diload untuk media gallery*/
	$('#modalAddMedia').on('hidden.bs.modal', function () {
		$(this).removeData('bs.modal');
	});
	
	/*Memilih gambar modal gallery untuk set featured image*/
	$("body").on('click', 'input[type=radio].checkbox-image-list', function () {
		if (this.checked) {
			var id = $(this).attr('data-id');
			var href = $('#btnSetFeaturedImage').attr('data-href');
			$.ajax({
				url: href,
				data: {
					id: id
				},
				type: 'post',
				dataType: 'json',
				cache: false,
				success: function (msg) {
					$('#urlDetailImage').val(msg.url);
					$('#titleDetailImage').val(msg.title);
					$('#imageDetailImage').attr('src', msg.url);
					$('#btnSetFeaturedImage').attr('data-id', msg.id_image);
				}
			});
		}

	});
	
	/*Ketika Button Insert pada media gallery ditekan maka akan memasukkan gambar kedalam Fieture Image*/
	$('body').on('click', '#btnSetFeaturedImage', function () {
		var href = $(this).attr('data-href');
		var val = [];
		$('.checkbox-image-list:checked').each(function (i) {
			val[i] = $(this).attr('data-id');
		});
			/*Jika hanya satu gambar saja*/
			$.ajax({
				url: href,
				data: {
					id: val[0]
				},
				type: 'post',
				dataType: 'json',
				cache: false,
				success: function (msg) {
					$('#imageDetailFieture').attr('src', msg.url);
					$('#image_fitur').val(msg.url);
					$('#id_fitur').val(msg.id);
					$('#modalAddMedia').modal('hide');
				}
			});
		
	});
	
	/*Ketika sudah memilih gambar yang akan diupload maka otomatis langsung upload*/
	$('body').on('change', '#btnUploadFitur', function () {
		$('#formUploadFitur').submit();
	});
	
	/*Ketika form upload sudah diupload maka langsung membuka tab gallery*/
	$('body').on('submit', '#formUploadFitur', function (e) {
		e.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function (data) {
				$('#tabUpload').removeClass('active');
				$('#upload_media').removeClass('active');
				$('#tabMediaLibrary').addClass('active');
				$('#media_library').addClass('active');

				$('#media_library > div ').remove();
				$.get($('#tabMediaLibrary a').attr('href'), function (hasil) {
					$($('#tabMediaLibrary a').attr('data-target')).html(hasil);
				});
			},
			error: function (data) {
			}
		});
	});
	
	/*Ajax content ketika membuka tab media gallery*/
	$('body').on('click', '[data-toggle="tabajax"]', function (e) {
		var $this = $(this),
			loadurl = $this.attr('href'),
			targ = $this.attr('data-target');

		$.get(loadurl, function (data) {
			$(targ).html(data);
		});

		$this.tab('show');
		return false;
	});
 
</script>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->