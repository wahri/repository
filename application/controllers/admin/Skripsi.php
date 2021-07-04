<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skripsi extends Admin_Controller
{
	protected $table_row = 10;
    function __construct()
    {
        parent::__construct();
		$this->load->helper('fungsidate');
		$this->load->library('pagination');
		$this->load->helper(array('url'));
		$this->load->model('admin_skripsi_model');
		$this->load->model('all_image_model');
		$this->load->model('public_home_model');
		$this->load->library('costume');
		$this->load->library('form_validation');
		$this->load->library('session');
    }
	
	public function index()
    {			
		$this->data['title'] 			= 'Data Skripsi';
		$this->data['data_karya'] 		= $this->admin_skripsi_model->get_table(null, 'kosentrasi')->result();
		
		$config['per_page'] 			= 10;
		$pagging 						= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		
		$proses_select 			= '';
		$topik_select			= '';
		$result_select			= '';
		$reset_filter			= '';
		
		//filter
		if (isset($_POST['filter_button'])) {
			if($this->input->post('proses') > 0){
				if($this->input->post('topik') > 0){
					$proses_select 			= $this->input->post('proses');
					$topik_select			= $this->input->post('topik');
					$reset_filter			= 1;
					$result_select 			= array ("status" => $proses_select , "kosentrasi" => $topik_select);
					$this->session->set_userdata(array("topik_select"=> $topik_select , "proses_select"=> $proses_select));
				}else{
					$proses_select 			= $this->input->post('proses');
					$topik_select			= '';
					$reset_filter			= 1;
					$result_select 			= array ("status" => $proses_select );
					$this->session->set_userdata(array("proses_select"=> $proses_select));
					$this->session->unset_userdata('topik_select');
				}
			}else{
				if($this->input->post('topik') > 0){
					$proses_select 			= '';
					$topik_select			= $this->input->post('topik');
					$result_select 			= array ("kosentrasi" => $topik_select);
					$reset_filter			= 1;
					$this->session->set_userdata(array("topik_select"=> $topik_select));
					$this->session->unset_userdata('proses_select');
				}else{
					$proses_select 			= '';
					$topik_select			= '';
					$result_select 			= '';
					$reset_filter			= '';
					$this->session->unset_userdata(array('topik_select','proses_select'));
				}
			}
			
		
		} else if (isset($_POST['reset_button'])) {
			//reset filter
			$proses_select 			= '';
			$topik_select			= '';
			$result_select 			= '';
			$reset_filter			= '';
			$this->session->unset_userdata(array('topik_select','proses_select'));
		} else {
			//normal
			if($this->session->userdata('proses_select') != NULL){
				if($this->session->userdata('topik_select') != NULL){
					$proses_select 			= $this->session->userdata('proses_select');
					$topik_select			= $this->session->userdata('topik_select');
					$reset_filter			= 1;
					$result_select 			= array ("status" => $proses_select , "kosentrasi" => $topik_select);
				}else{
					$proses_select 			= $this->session->userdata('proses_select');
					$topik_select			= '';
					$reset_filter			= 1;
					$result_select 			= array ("status" => $proses_select );
				}
			}else{
				if($this->session->userdata('topik_select') != NULL){
					$proses_select 			= '';
					$reset_filter			= 1;
					$topik_select			= $this->session->userdata('topik_select');
					$result_select 			= array ("kosentrasi" => $topik_select);
				}else{
					$proses_select 			= '';
					$topik_select			= '';
					$result_select 			= '';
					$reset_filter			= '';
				}
				
			}
		}
			
			
		$this->data['skripsi_parent'] 			= $this->admin_skripsi_model->get_list($result_select, $config['per_page'], $pagging, array('id','desc'),'skripsi')->result();
		$jumlah_data 							= $this->admin_skripsi_model->count_where($result_select);
		$this->data['proses_select'] 			= $proses_select;
		$this->data['topik_select'] 			= $topik_select;
		$this->data['reset_select'] 			= $reset_filter;
		$config['base_url'] 					= site_url('admin/skripsi/index/');
			
		$config['full_tag_open'] 				= '<ul class="pagination">';
		$config['full_tag_close'] 				= '</ul>';
		$config['prev_link'] 					= '&lt;';
		$config['prev_tag_open'] 				= '<li>';
		$config['prev_tag_close'] 				= '</li>';
		$config['next_link'] 					= '&gt;';
		$config['next_tag_open'] 				= '<li>';
		$config['next_tag_close'] 				= '</li>';
		$config['cur_tag_open'] 				= '<li class="active"><a href="#">';
		$config['cur_tag_close'] 				= '</a></li>';
		$config['num_tag_open'] 				= '<li>';
		$config['num_tag_close'] 				= '</li>';
		$config['first_tag_open'] 				= '<li>';
		$config['first_tag_close'] 				= '</li>';
		$config['last_tag_open'] 				= '<li>';
		$config['last_tag_close'] 				= '</li>';
		$config['first_link'] 					= '&lt;&lt; Previous';
		$config['last_link'] 					= 'Next &gt;&gt;';
		$config['total_rows'] 					= $jumlah_data;
		
		
		$this->pagination->initialize($config);	
					
		
		$start									= (int)$this->uri->segment(3) * $config['per_page']+1;
		$end 									= ($this->uri->segment(3) == floor($config['total_rows']/ $config['per_page']))? $config['total_rows'] : (int)$this->uri->segment(3) * $config['per_page'] + $config['per_page'];
		$this->data['result_count']				= "Showing ".$start." - ".$end." of ".$jumlah_data." Results";
		
		$this->load->view('admin/skripsi/view/index', $this->data);
	}
	
	public function edit($id)
    {
        if (isset($_POST['revisi'])) {
			$data_insert = array(
				'status'			=> 2,
				'komentar'			=> $this->input->post('komentar'),
			);
			
			$this->admin_skripsi_model->update(array('id'=>$id), $data_insert);
			//insert notivikasi
			$data_notiv = array(
				'user_id'			=> $this->ion_auth->get_user_id(),
				'for_user'			=> $this->input->post('user'),
				'notiv_text'		=> 'data skripsi anda kurang lengkap, klik link berikut untuk melengkapi data skripsi anda',
				'notiv_url'			=> 'skripsi/view/'.$id,
				'tanggal'			=> date("Y-m-d h:i:s"),
				'status'			=> 0,
			);
			$this->admin_skripsi_model->insert_table($data_notiv, 'notivikasi');
					
			$this->session->set_flashdata('success', 'Berhasil konfirmasi skripsi,');
			redirect('admin/skripsi', 'refresh');
			
		}else if (isset($_POST['setuju'])) {
			$data_insert = array(
				'status'			=> 3,
				'komentar'			=> $this->input->post('komentar'),
			);
			
			$this->admin_skripsi_model->update(array('id'=>$id), $data_insert);
			//insert notivikasi
			$data_notiv = array(
				'user_id'			=> $this->ion_auth->get_user_id(),
				'for_user'			=> $this->input->post('user'),
				'notiv_text'		=> 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi',
				'notiv_url'			=> 'skripsi/view/'.$id,
				'tanggal'			=> date("Y-m-d h:i:s"),
				'status'			=> 0,
			);
			$this->admin_skripsi_model->insert_table($data_notiv, 'notivikasi');
					
			$this->session->set_flashdata('success', 'Berhasil konfirmasi skripsi,');
			redirect('admin/skripsi', 'refresh');	
		}else{
			$this->session->set_flashdata('success', 'Maaf.. data belum bisa diakses,');
			redirect('admin/skripsi', 'refresh');
		}
	}
	
	 public function review($id)
    {
        $this->data['title'] 			= 'Karya Ilmiah (skripsi)';
		$cek_skripsi 					= $this->admin_skripsi_model->get(array('id' => $id));
		if($cek_skripsi->num_rows() > 0){
			$result_data 				= $cek_skripsi->row();
			$this->data['skripsi'] 		= $result_data;
			$this->load->view('admin/skripsi/view/detail', $this->data);
		}else{
			redirect('admin/skripsi', 'refresh');	
		}
    }
	
	public function search()
    {
        $search 						= $this->input->post('search');
		$this->data['skripsi_parent'] 	= $this->admin_skripsi_model->get_search(array('judul' => $search), null, $this->table_row, 0, array('id','desc'),'skripsi')->result();
		$view 							= $this->load->view('admin/skripsi/lib/list_page', $this->data);
        return $view;
    }
	
}

