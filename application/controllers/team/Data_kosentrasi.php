<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kosentrasi extends Team_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
		$this->load->library('pagination');
		$this->load->helper('fungsidate');
        $this->load->model('admin_data_kosentrasi_model');
    }

    public function index()
    {
		$this->data['title'] = 'Data Kosentrasi Karya';
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$jumlah_data 							= $this->admin_data_kosentrasi_model->count_all();
		
		$config['base_url'] 					= site_url('team/data_kosentrasi/index/');
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
		$start									= (int)$this->uri->segment(4) +1;
		if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
			$end = $config['total_rows'];
		} else {
			$end = (int)$this->uri->segment(4) + $config['per_page'];
		}
		
		$this->data['result_count']				= "Showing ".$start." - ".$end." of ".$jumlah_data." Results";
		$this->data['data_parent'] 				= $this->admin_data_kosentrasi_model->get_search(null, null, $config['per_page'], $pagging, array('id','desc'))->result();	
		$this->load->view('team/kosentrasi/view/index', $this->data);
    }
	
	public function add(){
		$this->data['title'] = 'Tambah Kosentrasi Karya';
		
		$this->form_validation->set_rules('nama','Nama kosentrasi karya','required');
		$this->form_validation->set_rules('keterangan','keterangan','required');
	
        $nama 							= $this->input->post('nama');
        $keterangan 					= $this->input->post('keterangan');
		
		if ($this->form_validation->run() === TRUE) {

			$additional_data = array(
                'nama' 			=> $nama,
                'keterangan'  	=> $keterangan
            );
			$this->admin_data_kosentrasi_model->insert($additional_data);
			$this->session->set_flashdata('success', 'Berhasil Menambah Data');
			redirect('team/data_kosentrasi', 'refresh');
			
		}else{
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			
			$this->data['nama'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'nama',
				'id' 			=> 'nama',
				'type' 			=> 'text',
				'placeholder' 	=> 'Nama Kosentrasi Karya',
				'autofocus' 	=> 'autofocus',
				'value' 		=> $this->form_validation->set_value('nama', $nama),
			);
			$this->data['keterangan'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'keterangan',
				'id' 			=> 'keterangan',
				'type' 			=> 'textarea',
				'value' 		=> $this->form_validation->set_value('keterangan', $keterangan),
			);
			
			$this->load->view('team/kosentrasi/add/index', $this->data);
		}
		
	}
	
	public function edit($id = NULL){
		$cek_data = $this->admin_data_kosentrasi_model->get(array('id' => $id));
		if($cek_data->num_rows() > 0){
			$this->data['title'] = 'Edit Kosentrasi Karya';
			$this->data['user'] = $cek_data->row();
			$this->data['id'] = $id;
			
			$this->form_validation->set_rules('nama','Nama Kosentrasi Karya','required');
			$this->form_validation->set_rules('keterangan','Keterangan','required');
			
			if ($this->form_validation->run() === TRUE) {
				$new_data = array(
					'nama' 				=> $this->input->post('nama'),
					'keterangan' 		=> $this->input->post('keterangan')
				);
				
				$this->admin_data_kosentrasi_model->update(array('id'=>$id), $new_data);
				$this->session->set_flashdata('success', 'Berhasil Merubah Data');
				redirect('team/data_kosentrasi', 'refresh');
				
			}else{
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				$this->load->view('team/kosentrasi/edit/index', $this->data);
			}
		
		}else{
			$this->session->set_flashdata('success', 'Maaf data tidak dapat diubah');
			redirect('team/kosentrasi', 'refresh');
		}
	}
	
    public function search()
    {
        $search 								= $this->input->post('search');
		$this->data['data_parent'] 				= $this->admin_data_kosentrasi_model->get_search(array('nama' => $search), null, $this->table_row, 0, array('id','desc'))->result();	
        $view = $this->load->view('team/kosentrasi/lib/list_page', $this->data);
        return $view;
    }
	
	public function delete($id = NULL)
    {
		if(is_null($id))
        {
            $this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
			redirect('team/data_kosentrasi', 'refresh');
        }
        else{
			$this->admin_data_kosentrasi_model->delete(array('id'=>$id));
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('team/data_kosentrasi', 'refresh');
		}
    }
}