<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends Admin_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
        $this->load->model('admin_setting_model');
        $this->load->helper('file');
    }

    public function index()
    {
		$this->data['title'] 			= 'Setting Website';
		$setting_judul 					= $this->admin_setting_model->get(array('setting'=>'judul'))->row()->value;
		$setting_deskripsi 				= $this->admin_setting_model->get(array('setting'=>'deskripsi'))->row()->value;
		$setting_copyright 				= $this->admin_setting_model->get(array('setting'=>'copyright'))->row()->value;
		$setting_company 				= $this->admin_setting_model->get(array('setting'=>'company'))->row()->value;
		$setting_alamat 				= $this->admin_setting_model->get(array('setting'=>'alamat'))->row()->value;
		$setting_kontak 				= $this->admin_setting_model->get(array('setting'=>'kontak'))->row()->value;
		$setting_logo 					= $this->admin_setting_model->get(array('setting'=>'logo_site'))->row()->value;
		$setting_tentang 				= $this->admin_setting_model->get(array('setting'=>'about'))->row()->value;
		
		$this->form_validation->set_rules('judul','Nama judul','required');
        $this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('tentang','Tentang Kami','required');
        $this->form_validation->set_rules('copyright','copyright','required');
		$this->form_validation->set_rules('company','company','required');
        $this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('kontak','kontak','required');
		
		if ($this->form_validation->run() == true) {

			if($_FILES["logo_website"]["name"]){
				$config['upload_path'] 		= './upload/images/';
				$new_cover 					= str_replace(' ', '-', $_FILES['logo_website']['name']);
				$new_cover2 				= str_replace('_', '-', $new_cover);
				$new_cover3 				= strtotime("now").'-logo-'.$new_cover2;
				
				$config["file_name"] 		= $new_cover3; 
				$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				//$this->upload->do_upload('logo_website');

				if(!$this->upload->do_upload('logo_website')){
					  echo $this->upload->display_errors();
				 }else{
				
				$cover 						= $this->upload->data();
				$cover_url					= 'upload/images/'.$config["file_name"];
				$this->admin_setting_model->update(array('setting'=>'logo_site'),array('value'=>'upload/images/'.$config["file_name"]));
				}
				
			}
			
            $this->admin_setting_model->update(array('setting'=>'judul'),array('value'=>$this->input->post('judul')));
			$this->admin_setting_model->update(array('setting'=>'deskripsi'),array('value'=>$this->input->post('deskripsi')));
			$this->admin_setting_model->update(array('setting'=>'copyright'),array('value'=>$this->input->post('copyright')));
			$this->admin_setting_model->update(array('setting'=>'company'),array('value'=>$this->input->post('company')));
			$this->admin_setting_model->update(array('setting'=>'alamat'),array('value'=>$this->input->post('alamat')));
			$this->admin_setting_model->update(array('setting'=>'kontak'),array('value'=>$this->input->post('kontak')));
			$this->admin_setting_model->update(array('setting'=>'about'),array('value'=>$this->input->post('tentang')));
			$this->session->set_flashdata('success', 'Berhasil Merubah Data');
            //redirect('admin/setting', 'refresh');
			
		}
		
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
		if(!empty($setting_logo)){
			$this->data['featuredimage'] 	= base_url($setting_logo);
		}else{
			$this->data['featuredimage'] 	= base_url('upload/system/logo_default.png');
		}
		
		$this->data['id_fitur'] 			= $setting_logo;
		$this->data['judul'] 				= array(
			'name' 			=> 'judul',
			'id' 			=> 'judul',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('judul', $setting_judul),
		);
		$this->data['deskripsi'] = array(
			'name' 			=> 'deskripsi',
			'id' 			=> 'deskripsi',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('deskripsi', $setting_deskripsi),
		);
		$this->data['tentang'] = array(
			'name' 			=> 'tentang',
			'id' 			=> 'tentang',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('tentang', $setting_tentang),
		);
		$this->data['copyright'] = array(
			'name' 			=> 'copyright',
			'id' 			=> 'copyright',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('copyright', $setting_copyright),
		);
		$this->data['company'] = array(
			'name' 			=> 'company',
			'id' 			=> 'company',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('company', $setting_company),
		);
		$this->data['alamat'] = array(
			'name' 			=> 'alamat',
			'id' 			=> 'alamat',
			'rows' 			=> '3',
			'type' 			=> 'textarea',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('alamat', $setting_alamat),
		);
		$this->data['kontak'] = array(
			'name' 			=> 'kontak',
			'id' 			=> 'kontak',
			'type' 			=> 'text',
			'class' 		=> 'form-control',
			'required' 		=> 'true',
			'value' 		=> $this->form_validation->set_value('kontak', $setting_kontak),
		);
		$this->load->view('admin/setting/index', $this->data);
		
    }

}