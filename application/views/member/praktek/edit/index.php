<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_member/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
<link href="<?php echo base_url('public/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('public/jQuery-Smart-Wizard/js/jquery.smartWizard.js'); ?>"></script>	
<script src="<?php echo base_url('public/admin/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
<script>
        tinyMCE.init({
			selector: "#abstrak, #pustaka",
			height: 300,
			theme: 'modern',
			menubar: false,
			plugins: ['paste,codesample,code'],
			toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | codesample code',
			paste_data_images: true,
			relative_urls : false,
			remove_script_host : true,
			document_base_url : "/",
			convert_urls : true,
		});
</script>	

<div class="right_col" role="main">
	<div class="">
		<div class="row">
			<div class="col-xs-12 invoice-header">
				<h3><i class="fa fa-recycle"></i> <?php echo $title; ?></h3>
			</div>
		</div>
		<div class="x_title"></div>
		
		<div class="row">
			<form id="formUploadFitur"  action="<?php echo url_web('member/praktek/edit/'.$id); ?>" method="post" enctype="multipart/form-data">
			<!-- Smart Wizard -->
                    <p><i class="fa fa-exclamation-triangle"></i> Silahkan isi from secara berurutan, untuk meminimalisir kesalahan dan gagal saat upload data</p>
                    <?php echo !empty($message) ? $message : ''; ?>
					<div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>informasi karya</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>summary karya</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Dokumen karya</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
					  
                      <div id="step-1">
                        
						<div class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Jenis Kosentrasi karya <span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
								<select class="form-control" name="karya" id="karya">
								<option value="">- pilihan -</option>
								<option value="magang" <?php if($karya == 'magang'){echo 'selected';} ?>>magang</option>
								<option value="projek" <?php if($karya == 'projek'){echo 'selected';} ?>>projek</option>
							  </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul Skripsi <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <?php echo form_input($judul); ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="penulis" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Penulis <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                              <?php echo form_input($penulis); ?>
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="pem_satu" class="control-label col-md-3 col-sm-3 col-xs-12">Pembimbing 1 <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <select class="form-control" name="pem_satu" id="pem_satu">
								<option value="">- pilihan -</option>
								<?php 
								foreach($data_dosen as $r_dosen){
									if($pem_satu == $r_dosen->id){
										echo '<option value="'.$r_dosen->id.'" selected>'.$r_dosen->nama.'</option>';
									}else{
										echo '<option value="'.$r_dosen->id.'">'.$r_dosen->nama.'</option>';
									}
								}
								?>
							  </select>
                            </div>
                          </div>
						  
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Seminar <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                              <div class="input-group date form_date" data-date-format="dd MM yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd hh:ii">
									<input type="text" class="form-control" id="subtanggal_start" value="<?php echo $tanggal; ?>" name="subtanggal_start" aria-describedby="basic-addon1" disabled>
									<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
									<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								<input type="hidden" id="tanggal" name="tanggal" value="<?php echo $tanggal; ?>">
                            </div>
                          </div>
						  
						</div>  
                        

                      </div>
					  
                    <div id="step-2">
						
						<div class="form-horizontal form-label-left">						
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Cover/Halaman Depan <span class="required">*</span>
								</label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input id="cover" class="form-control col-md-7 col-xs-12" type="file" name="cover">
									<p class="help-block">Upload Cover, tipe file PDF</p>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Abstrak <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo form_textarea($abstrak); ?>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Daftar Pustaka <span class="required">*</span>
								</label>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<?php echo form_textarea($pustaka); ?>
								</div>
							</div>
						</div>
                    </div>
					
                    <div id="step-3">
						
						<div class="form-horizontal form-label-left">	
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Bab I <span class="required">*</span>
								</label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input id="bab_satu" class="form-control col-md-7 col-xs-12" type="file" name="bab_satu">
									<p class="help-block">Upload Bab 1, tipe file PDF</p>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Dokumen Kerja Praktek <span class="required">*</span>
								</label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input id="doc_skripsi" class="form-control col-md-7 col-xs-12" type="file" name="doc_skripsi">
									<p class="help-block">Upload Dokumen lengkap kerja praktek, tipe file PDF</p>
								</div>
							</div>
						</div>
                    </div>
                      
				
                    </div>
                    <!-- End SmartWizard Content -->
			</form>
		</div>
	</div>
</div>

<script>

$(document).ready(function(){
    // Smart Wizard         
    $('#wizard').smartWizard({
        onLeaveStep:leaveAStepCallback,
        onFinish:onFinishCallback
    });

    $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');

    function leaveAStepCallback(obj, context){
        //alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
		if(context.toStep > context.fromStep)
			return validateSteps(context.fromStep);
		 else
			return true;
        //return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
    }

    function onFinishCallback(objs, context){
        if(validateAllSteps()){
            $('form').submit();
        }
    }

    // Your Step validation logic
    function validateSteps(stepnumber){
        var isStepValid = true;
        // validate step 1
        if(stepnumber == 1){
			$('#karya,#judul,#penulis,#pem_satu,#pem_dua,#subtanggal_start').each(function () {
                if ($.trim($(this).val()) == '') {
                    isStepValid = false;
                    $(this).css({
                        "border": "1px solid red",
                        "background": "#FFCECE"
                    });
                }else {
                    $(this).css({
                        "border": "",
                        "background": ""
                    });
                }
            });
			
            if (isStepValid == false){
                return false;
			}else{
				return true;
			}
        }
		if(stepnumber == 2){
			if ($.trim($('#cover').val()) == '') {
				isStepValid = false;
				$('#cover').css({
					"border": "1px solid red",
					"background": "#FFCECE"
				});
			}else{
				$('#cover').css({
					"border": "",
					"background": ""
				});
			}	
					
			if(tinymce.get('abstrak').getContent().length < 10){
				isStepValid = false;
				$(".mce-container-body").css( "background-color", "#ffe3bb" );
			}else{
				$(".mce-container-body").css( "background-color", "" );
			}
			
			if(tinymce.get('pustaka').getContent().length < 10){
				isStepValid = false;
				$(".mce-container-body").css( "background-color", "#ffe3bb" );
			}else{
				$(".mce-container-body").css( "background-color", "" );
			}
		
            if (isStepValid == false){
                return false;
			}else{
				return true;
			}
		}
    }
	
	
    function validateAllSteps(){
        var isStepValid = false;
		//alert('valid finis');
        $('#bab_satu,#jurnal,#doc_skripsi,#aplikasi').each(function () {
			if ($.trim($(this).val()) == '') {
				isStepValid = false;
				$(this).css({
					"border": "1px solid red",
					"background": "#FFCECE"
				});
			}else {
				isStepValid = true;
				$(this).css({
					"border": "",
					"background": ""
				});
			}
		});  
        return isStepValid;
    }          
});









    </script>
<!-- /page content -->
<script src="<?php echo base_url('public/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('public/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.id.js'); ?>"></script>
<script>
		
	$('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		linkField: "tanggal",
    });
</script>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->