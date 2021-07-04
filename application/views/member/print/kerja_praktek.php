<?php $this->load->view('theme/t_head'); ?>
<?php $this->load->view('theme_member/t_sidebar_nav'); ?>
<?php $this->load->view('theme/t_top_nav'); ?>
<style>
@media print
{
.noprint {display:none;}
body:before {
        content: url(<?php echo base_url('upload/system/bg_print.png'); ?>) ;
        position: absolute;
    z-index: 1;
    text-align: center;
    width: 100%;
  margin-top: 30%;
      }
table, tbody, tr, th, td{
      background: 0 0 !important;
}
}

</style>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row noprint">
      <div class="col-xs-12 invoice-header">
        <h3><i class="fa fa-print"></i> <?php echo $title; ?></h3>
      </div>
    </div>
    <div class="x_title noprint"></div>
        <div class="row">
          
      <?php echo !empty($message) ? $message : ''; ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <br />
        <img class="center-block" src="<?php echo base_url('/upload/system/tes.png'); ?>" alt="" height="50px">
        <h2 class="text-center">
        UNIVERSITAS MUHAMMADIYAH RIAU</br>
        FAKULTAS ILMU KOMPUTER</br>
        PROGRAM STUDI TEKNIK INFORMATIKA
        </h2>
<p class="text-center"><small>
Jl. Tuanku Tambusai / Jl. Nangka-Pekanbaru, Telp. (0761)35008, 20497 Fax. (0761 36912), Email: informatika@umri.ac.id,</br>
web: informatika.umri.ac.id</small></p><hr/>

        <section class="content invoice">
          <div class="row">
              <div class="col-xs-12 invoice-header">
                <h2>FORMULIR UPLOUD LAPORAN KERJA PRAKTEK</h2>
              </div>
              <div class="col-sm-12">
                <table>
                  <tbody>
                    <tr>
                      <td><strong>1. &nbsp;</strong></td>
                      <td><strong>Data Pribadi</strong></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>a. Nama Lengkap Penulis</td>
                      <td>:&nbsp;</td>
                      <td><?php echo $skripsi->penulis; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>b. No. Induk Mahasiswa</td>
                      <td>:&nbsp;</td>
                      <td><?php echo $profile_user->username; ?></td>
                    </tr>
                    <tr>
                      <td><strong>2. &nbsp;</strong></td>
                      <td><strong>Data karya</strong></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>a. Jenis Laporan</td>
                      <td>:&nbsp;</td>
                      <td><?php echo $skripsi->jenis; ?></td>
                    </tr>
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td>c. Judul Laporan</td>
                      <td>:&nbsp;</td>
                      <td><?php echo $skripsi->judul; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>b. Pembimbing</td>
                      <td>:&nbsp;</td>
                      <td><?php echo $this->costume->get_name_dosen($skripsi->pembimbing)->nama; ?></td>
                    </tr>
                    <tr>
                      <td><strong>3. &nbsp;</strong></td>
                      <td><strong>Dokumen yang di Unggah</strong></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Halaman Sampul.pdf</td>
                      <td>:</td>
                      <td>&#10004;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>BAB 1.pdf</td>
                      <td>:</td>
                      <td>&#10004;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Dokumen Laporan.pdf</td>
                      <td>:</td>
                      <td>&#10004;</td>
                    </tr>
                  </tbody>
                </table>

                </br>
                <p>Formulir ini merupakan bukti resmi yang dikeluarkan secara otomatis oleh Sistem Repositori Teknik Informatika (SEPORTIF), setelah mahasiswa menyelesaikan penggugahan dokumen Laporan Kerja Praktek.</p>
                </br>
                <p><strong>Tanggal Cetak Formulir : <?php echo tgl_indo(date("Y-m-d")); ?></strong></p>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12">
                <a href="<?php echo url_web('member/praktek'); ?>" class="btn btn-success pull-right noprint"><i class="fa fa-credit-card"></i> kembali</a>
                <button class="btn btn-default pull-right noprint noprint" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
              </div>
          </div>
        </section>
      </div>  
    </div>
  </div>
</div>

<?php $this->load->view('theme/t_footer'); ?>
<!-- /page content -->