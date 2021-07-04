<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_admin/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>

<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-globe"></i> <?php echo $title; ?></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
			  
			  <div class="">
			  <?php 
			  $proses = 0;
			  if($skripsi->status == 1){
				  $proses 			= 40;
				  $proses_name 		= 'Menunggu persetujuan';
				  $button_print 	= '<button type="submit" name="setuju" id="setuju" class="btn btn-success pull-right"> Setujui</button>';
				  $button_edit 		= '<button type="submit" name="revisi" id="setuju" class="btn btn-primary pull-right" style="margin-right: 5px;"> Revisi</button>';
				  $komentar 		= '';
			  }else if($skripsi->status == 2){
				  $proses 			= 76;
				  $proses_name 		= 'Menunggu Perbaikan Dokumen';
				  $button_print 	= '<button class="btn btn-success pull-right disabled">Setujui</button>';
				  $button_edit 		= '<button class="btn btn-primary pull-right" style="margin-right: 5px;" disabled> Revisi</button>';
				  $komentar 		= $skripsi->komentar;
			  }else{
				  $button_print 	= '<button class="btn btn-success pull-right disabled"><i class="fa fa-print"></i> Setujui</button>';
				  $button_edit 		= '<button class="btn btn-primary pull-right disabled" style="margin-right: 5px;"> Revisi</button>';
				  $komentar 		= 'Selesai';
				  $proses 			= 100;
				  $proses_name 		= 'Selesai';
			  }
			  
			  ?>
			  
                        <div class="product_price">
                          <h3>Proses berjalan [ <?php echo $proses_name; ?> ]</h3>
						  <div class="progress progress_md">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $proses; ?>"></div>
                          </div>
						  <small><?php echo $proses; ?>% Complete</small>
                          <br>
                        </div>
                      </div>
			 <form id="formUploadFitur"  action="<?php echo url_web('admin/skripsi/edit/'.$skripsi->id); ?>" method="post" enctype="multipart/form-data">
			  <div class="form-horizontal form-label-left">
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Jenis Kosentrasi karya :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $this->costume->get_name_kosentrasi($skripsi->kosentrasi); ?> </p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Judul Skripsi :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $skripsi->judul; ?></p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Nama Penulis :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $skripsi->penulis; ?></p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Pembimbing 1 :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $this->costume->get_name_dosen($skripsi->pembimbing_1)->nama; ?> <br> [NIDN: <?php echo $this->costume->get_name_dosen($skripsi->pembimbing_1)->nidn; ?>]</p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Pembimbing 2 :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $this->costume->get_name_dosen($skripsi->pembimbing_2)->nama; ?> <br> [NIDN: <?php echo $this->costume->get_name_dosen($skripsi->pembimbing_2)->nidn; ?>]</p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Tanggal Seminar Komprehensif :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo tgl_indo($skripsi->tanggal_seminar); ?></p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Abstrak :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $skripsi->abstrak; ?></p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Daftar Pustaka :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $skripsi->daftar_pustaka; ?></p>
					  </select>
					</div>
				</div>
			  
			  </div>
			  
			  <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th colspan="4">Data Skripsi</th>
                           
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Cover Halaman</td>
                                <td>Cover halaman depan skripsi anda, Type file PDF 
                                </td>
                                <td><i class="fa fa-file-pdf-o"></i> PDF</td>
								<td><a href="<?php echo base_url($skripsi->cover); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
								<tr>
                                <td>Bab I</td>
                                <td>Bab 1 , Type file PDF</td>
                                <td><i class="fa fa-file-pdf-o"></i> PDF</td>
								<td><a href="<?php echo base_url($skripsi->bab_1); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
							  <tr>
                                <td>Jurnal</td>
                                <td>Jurnal , Type file PDF</td>
                                <td><i class="fa fa-file-pdf-o"></i> PDF</td>
								<td><a href="<?php echo base_url($skripsi->jurnal); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
							  <tr>
                                <td>Dokumen Skripsi</td>
                                <td>Seluruh dokumen laporan skripsi, mulai dari cover sampai daftar pustaka, Type file PDF</td>
                                <td><i class="fa fa-file-pdf-o"></i> PDF</td>
								<td><a href="<?php echo base_url($skripsi->dokumen); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
							  <tr>
                                <td>Aplikasi</td>
                                <td>Data Aplikasi, shortcode, bulding exe/apk, php,html,javascrip dan lainnya, file di compress ke RAR/ZIP</td>
                                <td><i class="fa fa-file-archive-o"></i> ZIP/RAR</td>
								<td><a href="<?php echo base_url($skripsi->files); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
						
						
                        <!-- /.col -->
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Komentar:</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							  <textarea name="komentar" id="komentar" class="resizable_textarea form-control" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 54px;" required><?php echo $komentar; ?></textarea>
							</div>
						  </div>
						 
                      </div>
                      <!-- /.row -->
					  
					  <div class="row no-print">
                        <div class="col-xs-12">
						 <div class="ln_solid"></div>
                          <a href="<?php echo base_url('admin/skripsi'); ?>" class="btn btn-default" >Kembali</a>
						  <?php echo $button_print; ?>
						  <?php echo $button_edit; ?>
						  <input type="hidden" name="user" value="<?php echo $skripsi->user_id; ?>">
                        </div>
                      </div>
				</form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->