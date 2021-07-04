<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Praktek extends Member_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->load->helper('fungsidate');
		$this->load->model('member_praktek_model');
		$this->load->model('all_image_model');
		$this->load->model('public_home_model');
		$this->load->library('costume');
		$this->load->library('form_validation');
		$this->load->helper('file');
    }

    public function index()
    {
        $this->data['title'] 			= 'Kerja Praktek';
		$this->data['data_dosen'] 		= $this->member_praktek_model->get_table(null, 'dosen')->result();
		$cek_skripsi 					= $this->member_praktek_model->get(array('user_id' => $this->ion_auth->get_user_id()));
		if($cek_skripsi->num_rows() > 0){
			$result_data 				= $cek_skripsi->row();
			redirect('member/praktek/view/'.$result_data->id, 'refresh');	
		}else{
			$this->form_validation->set_rules('karya','JENIS KERJA PRAKTEK','required');
			$this->form_validation->set_rules('judul','JUDUL SKRIPSI','required');
			$this->form_validation->set_rules('penulis','NAMA PENULIS','required');
			$this->form_validation->set_rules('pem_satu','PEMBIMBING','required');
			$this->form_validation->set_rules('tanggal','TANGGAL SEMINAR','required');
			$this->form_validation->set_rules('abstrak','ABSTRAK','required');
			$this->form_validation->set_rules('pustaka','DAFTAR PUSTAKA','required');
			$this->form_validation->set_rules('cover', '', 'callback_file_check_cover');
			$this->form_validation->set_rules('bab_satu', '', 'callback_file_check_bab_satu');
			$this->form_validation->set_rules('doc_skripsi', '', 'callback_file_check_doc_skripsi');
			
			$karya			= 	$this->input->post('karya');
			$judul 			= 	$this->input->post('judul');
			$penulis 		= 	$this->input->post('penulis');
			$pem_satu 		= 	$this->input->post('pem_satu');
			$tanggal 		= 	$this->input->post('tanggal');
			$abstrak 		= 	$this->input->post('abstrak');
			$pustaka 		= 	$this->input->post('pustaka');
			
			if ($this->form_validation->run() === TRUE) {
				
				$config['upload_path'] 		= './upload/files/';

				//upload file cover
				if($_FILES["cover"]["name"]){
					
					$new_cover 					= str_replace(' ', '-', $_FILES['cover']['name']);
					$new_cover2 				= str_replace('_', '-', $new_cover);
					
					$config["file_name"] 		= strtotime("now").'-cover-'.$new_cover2;
					$config['allowed_types'] 	= 'pdf';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					$this->upload->do_upload('cover');
					
					$cover 						= $this->upload->data();
					$cover_url					= 'upload/files/'.$config["file_name"];
				}
				
				//upload file bab 1
				if($_FILES["bab_satu"]["name"]){
					
					$new_bab_satu 				= str_replace(' ', '-', $_FILES['bab_satu']['name']);
					$new_bab_satu2 				= str_replace('_', '-', $new_bab_satu); 
					
					$config["file_name"] 		= strtotime("now").'-bab-1-'.$new_bab_satu2;
					$config['allowed_types'] 	= 'pdf';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					$this->upload->do_upload('bab_satu');
					
					$bab_satu 					= $this->upload->data();
					$bab_satu_url				= 'upload/files/'.$config["file_name"];
				}
				
				//upload file document
				if($_FILES["doc_skripsi"]["name"]){
					
					$new_doc_skripsi 			= str_replace(' ', '-', $_FILES['doc_skripsi']['name']);
					$new_doc_skripsi2 			= str_replace('_', '-', $new_doc_skripsi);
					
					$config["file_name"] 		= strtotime("now").'-skripsi-'.$new_doc_skripsi2;
					$config['allowed_types'] 	= 'pdf';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					$this->upload->do_upload('doc_skripsi');
					
					$doc_skripsi 				= $this->upload->data();
					$doc_skripsi_url			= 'upload/files/'.$config["file_name"];
				}
				
				$data_insert = array(
					'jenis'				=> $karya,
					'judul'				=> $judul,
					'penulis'			=> $penulis,
					'pembimbing'		=> $pem_satu,
					'tanggal'			=> $tanggal,
					'abstrak'			=> $abstrak,
					'daftar_pustaka'	=> $pustaka,
					'cover'				=> $cover_url,
					'bab_1'				=> $bab_satu_url,
					'files'				=> $doc_skripsi_url,
					'status'			=> 1,
					'user_id'			=> $this->ion_auth->get_user_id(),
				);
				//insert skripsi
				$this->member_praktek_model->insert($data_insert);
				$id_skr 				= $this->db->insert_id();
				//insert notivikasi
				$data_notiv = array(
					'user_id'			=> $this->ion_auth->get_user_id(),
					'for_user'			=> 'admin',
					'notiv_text'		=> 'baru saja mengupload data kerja praktek baru, klik link berikut untuk verifikasi data',
					'notiv_url'			=> 'praktek/review/'.$id_skr,
					'tanggal'			=> date("Y-m-d h:i:s"),
					'status'			=> 1,
				);
				$this->member_praktek_model->insert_table($data_notiv, 'notivikasi');
				
				$this->session->set_flashdata('success', 'Berhasil Menambah Data, silahkan menunggu untuk validasi data anda');
				redirect('member/praktek/view/'.$id_skr, 'refresh');	
				
			}else{
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				
				$this->data['judul'] 	= array(
					'class' 			=> 'form-control col-md-7 col-xs-12',
					'name' 				=> 'judul',
					'id' 				=> 'judul',
					'type' 				=> 'text',
					'placeholder' 		=> 'Judul Skripsi',
					'value' 			=> $this->form_validation->set_value('judul', $judul),
				);
				$this->data['penulis'] 	= array(
					'class' 			=> 'form-control col-md-7 col-xs-12',
					'name' 				=> 'penulis',
					'id' 				=> 'penulis',
					'type' 				=> 'text',
					'placeholder' 		=> 'Nama Penulis',
					'value' 			=> $this->form_validation->set_value('penulis', $penulis),
				);
				$this->data['abstrak'] 	= array(
					'class' 			=> 'form-control',
					'name' 				=> 'abstrak',
					'id' 				=> 'abstrak',
					'type' 				=> 'textarea',
					'value' 			=> $this->form_validation->set_value('abstrak', $abstrak),
				);
				$this->data['pustaka'] 	= array(
					'class' 			=> 'form-control',
					'name' 				=> 'pustaka',
					'id' 				=> 'pustaka',
					'type' 				=> 'textarea',
					'value' 			=> $this->form_validation->set_value('pustaka', $pustaka),
				);
				
				$this->data['karya']	= $karya;
				$this->data['pem_satu']	= $pem_satu;
				$this->data['tanggal']	= $tanggal;
				
				
				$this->load->view('member/praktek/add/index', $this->data);
			}
		}
    }
	
	public function edit($id)
    {
        $this->data['title'] 			= 'Update Kerja Praktek';
		$this->data['data_dosen'] 		= $this->member_praktek_model->get_table(null, 'dosen')->result();
		$cek_skripsi 					= $this->member_praktek_model->get(array('id' => $id, 'user_id' => $this->ion_auth->get_user_id()));
		if($cek_skripsi->num_rows() > 0){
			$result_data 				= $cek_skripsi->row();
			if($result_data->status == 2){

				$this->data['result_data']	= $result_data;
				$this->form_validation->set_rules('karya','JENIS KERJA PRAKTEK','required');
				$this->form_validation->set_rules('judul','JUDUL SKRIPSI','required');
				$this->form_validation->set_rules('penulis','NAMA PENULIS','required');
				$this->form_validation->set_rules('pem_satu','PEMBIMBING','required');
				$this->form_validation->set_rules('tanggal','TANGGAL SEMINAR','required');
				$this->form_validation->set_rules('abstrak','ABSTRAK','required');
				$this->form_validation->set_rules('pustaka','DAFTAR PUSTAKA','required');
				$this->form_validation->set_rules('cover', '', 'callback_file_check_cover');
				$this->form_validation->set_rules('bab_satu', '', 'callback_file_check_bab_satu');
				$this->form_validation->set_rules('doc_skripsi', '', 'callback_file_check_doc_skripsi');
				
				$karya			= 	$this->input->post('karya');
				$judul 			= 	$this->input->post('judul');
				$penulis 		= 	$this->input->post('penulis');
				$pem_satu 		= 	$this->input->post('pem_satu');
				$tanggal 		= 	$this->input->post('tanggal');
				$abstrak 		= 	$this->input->post('abstrak');
				$pustaka 		= 	$this->input->post('pustaka');
				
				if ($this->form_validation->run() === TRUE) {
					
					$config['upload_path'] 		= './upload/files/';

					//upload file cover
					if($_FILES["cover"]["name"]){
						
						$new_cover 					= str_replace(' ', '-', $_FILES['cover']['name']);
						$new_cover2 				= str_replace('_', '-', $new_cover);
						
						$config["file_name"] 		= strtotime("now").'-cover-'.$new_cover2;
						$config['allowed_types'] 	= 'pdf';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('cover');
						
						$cover 						= $this->upload->data();
						$cover_url					= 'upload/files/'.$config["file_name"];
					}
					
					//upload file bab 1
					if($_FILES["bab_satu"]["name"]){
						
						$new_bab_satu 				= str_replace(' ', '-', $_FILES['bab_satu']['name']);
						$new_bab_satu2 				= str_replace('_', '-', $new_bab_satu); 
						
						$config["file_name"] 		= strtotime("now").'-bab-1-'.$new_bab_satu2;
						$config['allowed_types'] 	= 'pdf';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('bab_satu');
						
						$bab_satu 					= $this->upload->data();
						$bab_satu_url				= 'upload/files/'.$config["file_name"];
					}
					
					//upload file document
					if($_FILES["doc_skripsi"]["name"]){
						
						$new_doc_skripsi 			= str_replace(' ', '-', $_FILES['doc_skripsi']['name']);
						$new_doc_skripsi2 			= str_replace('_', '-', $new_doc_skripsi);
						
						$config["file_name"] 		= strtotime("now").'-skripsi-'.$new_doc_skripsi2;
						$config['allowed_types'] 	= 'pdf';
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						$this->upload->do_upload('doc_skripsi');
						
						$doc_skripsi 				= $this->upload->data();
						$doc_skripsi_url			= 'upload/files/'.$config["file_name"];
					}
					
					$data_insert = array(
						'jenis'				=> $karya,
						'judul'				=> $judul,
						'penulis'			=> $penulis,
						'pembimbing'		=> $pem_satu,
						'tanggal'			=> $tanggal,
						'abstrak'			=> $abstrak,
						'daftar_pustaka'	=> $pustaka,
						'cover'				=> $cover_url,
						'bab_1'				=> $bab_satu_url,
						'files'				=> $doc_skripsi_url,
						'status'			=> 1,
						'user_id'			=> $this->ion_auth->get_user_id(),
					);
					//insert skripsi
					
					$this->member_praktek_model->update(array('id'=>$id), $data_insert);
					//insert notivikasi
					$data_notiv = array(
						'user_id'			=> $this->ion_auth->get_user_id(),
						'for_user'			=> 'admin',
						'notiv_text'		=> 'baru saja merefisi data laporan kerja praktek, klik link berikut untuk verifikasi ulang data',
						'notiv_url'			=> 'praktek/review/'.$id,
						'tanggal'			=> date("Y-m-d h:i:s"),
						'status'			=> 1,
					);
					
					$this->member_praktek_model->insert_table($data_notiv, 'notivikasi');
					
					$this->session->set_flashdata('success', 'Berhasil merubah Data, silahkan menunggu untuk validasi data anda');
					redirect('member/praktek/view/'.$id, 'refresh');	
					
				}else{
					$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
					
					$this->data['judul'] 	= array(
						'class' 			=> 'form-control col-md-7 col-xs-12',
						'name' 				=> 'judul',
						'id' 				=> 'judul',
						'type' 				=> 'text',
						'placeholder' 		=> 'Judul Skripsi',
						'value' 			=> $this->form_validation->set_value('judul', $result_data->judul),
					);
					$this->data['penulis'] 	= array(
						'class' 			=> 'form-control col-md-7 col-xs-12',
						'name' 				=> 'penulis',
						'id' 				=> 'penulis',
						'type' 				=> 'text',
						'placeholder' 		=> 'Nama Penulis',
						'value' 			=> $this->form_validation->set_value('penulis', $result_data->penulis),
					);
					$this->data['abstrak'] 	= array(
						'class' 			=> 'form-control',
						'name' 				=> 'abstrak',
						'id' 				=> 'abstrak',
						'type' 				=> 'textarea',
						'value' 			=> $this->form_validation->set_value('abstrak', $result_data->abstrak),
					);
					$this->data['pustaka'] 	= array(
						'class' 			=> 'form-control',
						'name' 				=> 'pustaka',
						'id' 				=> 'pustaka',
						'type' 				=> 'textarea',
						'value' 			=> $this->form_validation->set_value('pustaka', $result_data->daftar_pustaka),
					);
					
					$this->data['karya']	= $result_data->jenis;
					$this->data['pem_satu']	= $result_data->pembimbing;
					$this->data['tanggal']	= $result_data->tanggal;
					$this->data['id']		= $result_data->id;
					
					
					$this->load->view('member/praktek/edit/index', $this->data);
				}
			}else{
				redirect('member/praktek', 'refresh');	
			}
		}else{
			redirect('member/praktek', 'refresh');	
		}
    }
	
	 public function view($id)
    {
        $this->data['title'] 			= 'Kerja Praktek';
		$cek_skripsi 					= $this->member_praktek_model->get(array('id' => $id, 'user_id' => $this->ion_auth->get_user_id()));
		if($cek_skripsi->num_rows() > 0){
			$result_data 				= $cek_skripsi->row();
			$this->data['skripsi'] 		= $result_data;
			$this->load->view('member/praktek/view/index', $this->data);
		}else{
			redirect('member/praktek', 'refresh');	
		}
    }

    public function cetak($id)
    {
        $this->data['title'] 			= 'Bukti Penyerahan Laporan Kerja Praktek';
		$cek_skripsi 					= $this->member_praktek_model->get(array('id' => $id, 'user_id' => $this->ion_auth->get_user_id()));
		if($cek_skripsi->num_rows() > 0){
			$result_data 				= $cek_skripsi->row();
			$this->data['skripsi'] 		= $result_data;
			$this->load->view('member/print/kerja_praktek', $this->data);
		}else{
			redirect('member/praktek', 'refresh');	
		}
    }
	
	public function file_check_cover($str){
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['cover']['name']);
        if(isset($_FILES['cover']['name']) && $_FILES['cover']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check_cover', '<i class="fa fa-exclamation-triangle"></i> File <b>"Cover"</b> wajib type file PDF.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check_cover', '<i class="fa fa-exclamation-triangle"></i> Data <b>"Cover"</b> belum anda isi.');
            return false;
        }
    }
	
	public function file_check_bab_satu($str){
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['bab_satu']['name']);
        if(isset($_FILES['bab_satu']['name']) && $_FILES['bab_satu']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check_bab_satu', '<i class="fa fa-exclamation-triangle"></i> File <b>"Bab 1"</b> wajib type file PDF.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check_bab_satu', '<i class="fa fa-exclamation-triangle"></i> Data <b>"Bab 1"</b> belum anda isi.');
            return false;
        }
    }
	
	public function file_check_doc_skripsi($str){
        $allowed_mime_type_arr = array('application/pdf');
        $mime = get_mime_by_extension($_FILES['doc_skripsi']['name']);
        if(isset($_FILES['doc_skripsi']['name']) && $_FILES['doc_skripsi']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check_doc_skripsi', '<i class="fa fa-exclamation-triangle"></i> File <b>"Dokumen Lengkap Kerja Praktek"</b> wajib type file PDF.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check_doc_skripsi', '<i class="fa fa-exclamation-triangle"></i> Data <b>"Dokumen Lengkap Kerja Praktek"</b> belum anda isi.');
            return false;
        }
    }
	
}

