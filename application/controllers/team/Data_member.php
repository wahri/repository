<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_member extends Team_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
		$this->load->library('pagination');
		$this->load->helper('fungsidate');
        $this->load->model('admin_data_member_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
		$this->data['title'] = 'Data Mahasiswa';
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$jumlah_data 							= $this->admin_data_member_model->get_list(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
		
		$config['base_url'] 					= site_url('team/data_member/index/');
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
		$this->data['data_parent'] 				= $this->admin_data_member_model->get_list(array('users_groups.group_id' => 5), $config['per_page'], $pagging, array('users.id','desc'))->result();				
		
		$this->load->view('team/member/view/index', $this->data);
    }
	
	public function add(){
		$this->data['title'] = 'Tambah Mahasiswa';
		
		$this->form_validation->set_rules('nama_mahasiswa','Nama mahasiswa','required');
		$this->form_validation->set_rules('nim','NIM','required');
		$this->form_validation->set_rules('phone','Nomor Telpon','trim');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
		
		
        $nama_mahasiswa 				= $this->input->post('nama_mahasiswa');
        $nim 							= $this->input->post('nim');
		$phone 							= $this->input->post('phone');
		$email 							= $this->input->post('email');
        $password 						= $this->input->post('password');
        
		
		if ($this->form_validation->run() === TRUE) {

			$groups_ids = array('1' => 5);
			$additional_data = array(
                'first_name' => $nama_mahasiswa,
                'last_name'  => '',
                'company'    => 'UMRI',
                'phone'      => $phone
            );
			$last_id = $this->ion_auth->register($nim, $password, $email, $additional_data, $groups_ids);
			$this->session->set_flashdata('success', 'Berhasil Menambah Data');
			redirect('team/data_member', 'refresh');
			
		}else{
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			
			$this->data['nama_mahasiswa'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'nama_mahasiswa',
				'id' 			=> 'nama_mahasiswa',
				'type' 			=> 'text',
				'placeholder' 	=> 'Nama Mahasiawa',
				'autofocus' 	=> 'autofocus',
				'value' 		=> $this->form_validation->set_value('nama_mahasiswa', $nama_mahasiswa),
			);
			$this->data['nim'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'nim',
				'id' 			=> 'nim',
				'type' 			=> 'text',
				'placeholder' 	=> 'NIM',
				'value' 		=> $this->form_validation->set_value('nim', $nim),
			);
			$this->data['phone'] = array(
                'name' 			=> 'phone',
                'id' 			=> 'phone',
                'type' 			=> 'text',
                'class' 		=> 'form-control',
				'required' 		=> 'true',
                'value' 		=> $this->form_validation->set_value('phone', $phone),
            );
            $this->data['email'] = array(
                'name' 			=> 'email',
                'id' 			=> 'email',
                'type' 			=> 'text',
                'class' 		=> 'form-control',
				'required' 		=> 'true',
                'value' 		=> $this->form_validation->set_value('email', $email),
            );
			$this->data['password'] = array(
                'name' 			=> 'password',
                'id' 			=> 'password',
                'type' 			=> 'password',
                'class' 		=> 'form-control',
				'required' 		=> 'true',
                'value' 		=> $this->form_validation->set_value('password', $password),
            );
			$this->data['password_confirm'] = array(
                'name' 			=> 'password_confirm',
                'id' 			=> 'password_confirm',
                'type' 			=> 'password',
                'class' 		=> 'form-control',
				'required' 		=> 'true',
                'value' 		=> $this->form_validation->set_value('password_confirm', $password),
            );
			$this->load->view('team/member/add/index', $this->data);
		}
		
	}
	
	public function edit($id = NULL){
		$cek_data = $this->admin_data_member_model->get(array('id' => $id));
		if($cek_data->num_rows() > 0){
			$this->data['title'] = 'Edit Mahasiswa';
			if($user = $this->ion_auth->user((int) $id)->row())
				{
					$this->data['user'] = $user;
				}
			else
			{
				$this->session->set_flashdata('success', 'Maaf Anda tidak dapat edit data');
				redirect('team/data_member', 'refresh');
			}
			$this->data['id'] = $id;
			
			$this->form_validation->set_rules('nama_mahasiswa','Nama mahasiswa','required');
			$this->form_validation->set_rules('nim','NIM','required');
			$this->form_validation->set_rules('phone','Nomor Telpon','trim');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');
			$this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
			
			if ($this->form_validation->run() === TRUE) {
				$user_id = $id;
				$new_data = array(
					'username' 			=> $this->input->post('nim'),
					'first_name' 		=> $this->input->post('nama_mahasiswa'),
					'email' 			=> $this->input->post('email'),
					'phone'      		=> $this->input->post('phone')
				);
				if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');

				$this->ion_auth->update($user_id, $new_data);
				$this->session->set_flashdata('success', 'Berhasil Merubah Data');
				redirect('team/data_member', 'refresh');
				
			}else{
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				$this->load->view('team/member/edit/index', $this->data);
			}
		
		}else{
			$this->session->set_flashdata('success', 'Maaf data tidak dapat diubah');
			redirect('team/data_member', 'refresh');
		}
	}
	
    public function search()
    {
        $search 								= $this->input->post('search');
		$this->data['data_parent'] 				= $this->admin_data_member_model->search(array('users.first_name' => $search), $this->table_row, 0, array('users_groups.group_id' => 5), array('users.id','desc'))->result();
        $view = $this->load->view('team/member/lib/list_page', $this->data);
        return $view;
    }
	
	public function delete($user_id = NULL)
    {
		if(is_null($user_id))
        {
            $this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
			redirect('team/data_member', 'refresh');
        }
        else{
			if($user_id == $this->ion_auth->get_user_id()){
				$this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
				redirect('team/data_member', 'refresh');
			}else{			
				$this->ion_auth->delete_user($user_id);
				$this->session->set_flashdata('success', 'Mahasiswa Berhasil dihapus');
				redirect('team/data_member', 'refresh');
			}
        }
    }
}