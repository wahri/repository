<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_member/t_sidebar_nav'); ?>
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
				  $button_print 	= '<button class="btn btn-success pull-right disabled"><i class="fa fa-print"></i> Cetak Surat bukti penyerahan</button>';
				  $button_edit 		= '<button class="btn btn-primary pull-right disabled" style="margin-right: 5px;"> Edit</button>';
				  $komentar 		= 'File kerja praktek anda sedang di tinjau, mohon tunggu dan pantau terus status skripsi anda';
			  }else if($skripsi->status == 2){
				  $proses 			= 76;
				  $proses_name 		= 'Menunggu Perbaikan Dokumen';
				  $button_print 	= '<button class="btn btn-success pull-right disabled"><i class="fa fa-print"></i> Cetak Surat bukti penyerahan</button>';
				  $button_edit 		= '<a href="'.base_url('member/praktek/edit/'.$skripsi->id).'" class="btn btn-primary pull-right" style="margin-right: 5px;"> Edit</a>';
				  $komentar 		= $skripsi->komentar;
			  }else{
				  $button_print 	= '<a href="'.base_url('member/praktek/cetak/'.$skripsi->id).'" class="btn btn-success pull-right"><i class="fa fa-print"></i> Cetak Surat bukti penyerahan</a>';
				  $button_edit 		= '<button class="btn btn-primary pull-right disabled" style="margin-right: 5px;"> Edit</button>';
				  $komentar 		= 'Selamat.. file kerja praktek anda telah kami terima, silahkan mendownload bukti pengesahan file kerja praktek dibawah';
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
			  
			  <div class="form-horizontal form-label-left">
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Jenis kerja praktek :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $skripsi->jenis; ?> </p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Judul Kerja Praktek :
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
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Pembimbing :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo $this->costume->get_name_dosen($skripsi->pembimbing)->nama; ?> <br> [NIDN: <?php echo $this->costume->get_name_dosen($skripsi->pembimbing)->nidn; ?>]</p>
					  </select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="karya">Tanggal Seminar :
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<p class="help-block"><?php echo tgl_indo($skripsi->tanggal); ?></p>
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
                                <th colspan="4">Data Dokumen Kerja Praktek</th>
                           
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Cover Halaman</td>
                                <td>Cover halaman depan laporan kerja praktek anda, Type file PDF 
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
                                <td>Dokumen kerja praktek</td>
                                <td>Seluruh dokumen laporan kerja praktek, mulai dari cover sampai daftar pustaka, Type file PDF</td>
                                <td><i class="fa fa-file-pdf-o"></i> PDF</td>
								<td><a href="<?php echo base_url($skripsi->files); ?>" target="_blank" type="button" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
						
						
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
					  <p>Komentar:</p>
					  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
						<?php echo $komentar; ?>
                        </p>
					  <div class="row no-print">
                        <div class="col-xs-12">
                          <a href="<?php echo base_url('member/home'); ?>" class="btn btn-default" >Kembali</a>
						  <?php echo $button_print; ?>
						  <?php echo $button_edit; ?>
						  
                        </div>
                      </div>
			  
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->