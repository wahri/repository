<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen extends Team_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
		$this->load->library('pagination');
		$this->load->helper('fungsidate');
        $this->load->model('admin_data_dosen_model');
    }

    public function index()
    {
		$this->data['title'] = 'Data Dosen';
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$this->data['data_parent'] 				= $this->admin_data_dosen_model->get_list(null, $config['per_page'], $pagging, array('id','desc'))->result();
		$jumlah_data 							= $this->admin_data_dosen_model->count_all();
		
		$config['base_url'] 					= site_url('team/data_dosen/index/');
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
						
		$this->load->view('team/dosen/view/index', $this->data);
    }
	
	public function add(){
		$this->data['title'] = 'Tambah Dosen';
		
		$this->form_validation->set_rules('nama_dosen','Nama dOSEN','required');
		$this->form_validation->set_rules('nidn','NIDN','required');
		
		$nama			= 	$this->input->post('nama_dosen');
		$nidn 			= 	$this->input->post('nidn');
		
		if ($this->form_validation->run() === TRUE) {
			
			$insert_data = array(
				'nama'=> $nama,
				'nidn'=> $nidn,
			);
			$this->admin_data_dosen_model->insert($insert_data);
            $id_berita = $this->db->insert_id();
			
			$this->session->set_flashdata('success', 'Berhasil Menambah Data');
			redirect('team/dosen', 'refresh');	
			
		}else{
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			
			$this->data['nama_dosen'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'nama_dosen',
				'id' 			=> 'nama_dosen',
				'type' 			=> 'text',
				'placeholder' 	=> 'Nama Dosen',
				'autofocus' 	=> 'autofocus',
				'value' 		=> $this->form_validation->set_value('nama_dosen', $nama),
			);
			$this->data['nidn'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'nidn',
				'id' 			=> 'nidn',
				'type' 			=> 'text',
				'placeholder' 	=> 'Nomor induk dosen',
				'autofocus' 	=> 'autofocus',
				'value' 		=> $this->form_validation->set_value('nidn', $nidn),
			);
			
			$this->load->view('team/dosen/add/index', $this->data);
		}
		
	}
	
	public function edit($id = NULL){
		$cek_data = $this->admin_data_dosen_model->get(array('id' => $id));
		if($cek_data->num_rows() > 0){
			$result_data 				= $cek_data->row();
			$this->data['title'] = 'Edit Dosen';
			$this->form_validation->set_rules('nama_dosen','Nama dOSEN','required');
			$this->form_validation->set_rules('nidn','NIDN','required');
			
			$nama						= 	$this->input->post('nama_dosen');
			$nidn 						= 	$this->input->post('nidn');
			
			if ($this->form_validation->run() === TRUE) {
				
				$insert_data = array(
					'nama'		=> $nama,
					'nidn'		=> $nidn,
				);
				$this->admin_data_dosen_model->update(array('id' => $id), $insert_data);
				$this->session->set_flashdata('success', 'Berhasil Merubah Data');
				redirect('team/data_dosen', 'refresh');	
				
			}else{
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				
				$this->data['nama_dosen'] = array(
					'class' 		=> 'form-control',
					'name' 			=> 'nama_dosen',
					'id' 			=> 'nama_dosen',
					'type' 			=> 'text',
					'placeholder' 	=> 'Nama Dosen',
					'autofocus' 	=> 'autofocus',
					'value' 		=> $this->form_validation->set_value('nama_dosen', $result_data->nama),
				);
				$this->data['nidn'] = array(
					'class' 		=> 'form-control',
					'name' 			=> 'nidn',
					'id' 			=> 'nidn',
					'type' 			=> 'text',
					'placeholder' 	=> 'Nomor induk dosen',
					'autofocus' 	=> 'autofocus',
					'value' 		=> $this->form_validation->set_value('nidn', $result_data->nidn),
				);
				$this->data['id'] 	= $id;
				
				$this->load->view('team/dosen/edit/index', $this->data);
			}

		}else{
			$this->session->set_flashdata('success', 'Maaf data tidak dapat diubah');
			redirect('team/data_dosen', 'refresh');
		}
	}
	

    public function search()
    {
        $search 					= $this->input->post('search');
        $this->data['data_parent'] 	= $this->admin_data_dosen_model->get_search(array('nama' => $search), null, $this->table_row, 0, array('id','desc'), 'dosen')->result();
		$view 						= $this->load->view('team/dosen/lib/list_page', $this->data);
        return $view;
    }
	
	
	public function delete($id = NULL)
    {
		if(is_null($id))
        {
            $this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
			redirect('team/data_dosen', 'refresh');
        }
        else{
			$this->admin_data_dosen_model->delete(array('id'=>$id));
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('team/data_dosen', 'refresh');
		}
    }

}