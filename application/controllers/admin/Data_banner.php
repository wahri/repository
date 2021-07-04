<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_banner extends Admin_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
		$this->load->library('pagination');
		$this->load->helper('fungsidate');
        $this->load->model('admin_data_banner_model');
        $this->load->helper('file');
    }

    public function index()
    {
		$this->data['title'] = 'Data Banner';
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$this->data['data_parent'] 				= $this->admin_data_banner_model->get_list(null, $config['per_page'], $pagging, array('id','desc'))->result();
		$jumlah_data 							= $this->admin_data_banner_model->count_all();
		
		$config['base_url'] 					= site_url('admin/data_banner/index/');
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
						
		$this->load->view('admin/banner/view/index', $this->data);
    }
	
	public function add(){
		$this->data['title'] = 'Tambah Banner';
		
		$this->form_validation->set_rules('title_banner','title banner','required');
		$this->form_validation->set_rules('sub_title_banner','sub banner','required');
		$this->form_validation->set_rules('link','link banner','required');
		
		$title_banner			= 	$this->input->post('title_banner');
		$sub_title_banner 		= 	$this->input->post('sub_title_banner');
		$link 					= 	$this->input->post('link');
		
		if ($this->form_validation->run() === TRUE) {
			if($_FILES["gambar"]["name"]){
				$config['upload_path'] 		= './upload/images/';
				$new_cover 					= str_replace(' ', '-', $_FILES['gambar']['name']);
				$new_cover2 				= str_replace('_', '-', $new_cover);
				$new_cover3 				= strtotime("now").'-logo-'.$new_cover2;
				
				$config["file_name"] 		= $new_cover3; 
				$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				//$this->upload->do_upload('logo_website');

				if(!$this->upload->do_upload('gambar')){
					  echo $this->upload->display_errors();
				 }else{
				
					$cover 						= $this->upload->data();
					$cover_url					= 'upload/images/'.$config["file_name"];

					$insert_data = array(
						'judul'		=> $title_banner,
						'sub_judul'	=> $sub_title_banner,
						'gambar'	=> $cover_url,
						'link'		=> $link,
					);
					$this->admin_data_banner_model->insert($insert_data);
					
					$this->session->set_flashdata('success', 'Berhasil Menambah Data');
					redirect('admin/data_banner', 'refresh');
				}
				
			}else{
				$this->session->set_flashdata('success', 'Gambar Harus anda isi');
				redirect('admin/data_banner', 'refresh');
			}
			
		}else{
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			
			$this->data['title_banner'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'title_banner',
				'id' 			=> 'title_banner',
				'type' 			=> 'text',
				'required' 		=> 'required',
				'value' 		=> $this->form_validation->set_value('title_banner', $title_banner),
			);
			$this->data['sub_title_banner'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'sub_title_banner',
				'id' 			=> 'sub_title_banner',
				'type' 			=> 'text',
				'required' 		=> 'required',
				'value' 		=> $this->form_validation->set_value('sub_title_banner', $sub_title_banner),
			);
			$this->data['link'] = array(
				'class' 		=> 'form-control',
				'name' 			=> 'link',
				'id' 			=> 'link',
				'type' 			=> 'text',
				'required' 		=> 'required',
				'value' 		=> $this->form_validation->set_value('link', $link),
			);
			
			$this->load->view('admin/banner/add/index', $this->data);
		}
		
	}
	
	public function edit($id = NULL){
		$cek_data = $this->admin_data_banner_model->get(array('id' => $id));
		if($cek_data->num_rows() > 0){
			$result_data 				= $cek_data->row();
			$this->data['title'] 		= 'Edit Banner';
			$this->form_validation->set_rules('title_banner','title banner','required');
			$this->form_validation->set_rules('sub_title_banner','sub banner','required');
			$this->form_validation->set_rules('link','link banner','required');
		
			$title_banner				= 	$this->input->post('title_banner');
			$sub_title_banner 			= 	$this->input->post('sub_title_banner');
			$link 						= 	$this->input->post('link');
			
			if ($this->form_validation->run() === TRUE) {
				
				if($_FILES["gambar"]["name"]){
					$config['upload_path'] 		= './upload/images/';
					$new_cover 					= str_replace(' ', '-', $_FILES['gambar']['name']);
					$new_cover2 				= str_replace('_', '-', $new_cover);
					$new_cover3 				= strtotime("now").'-logo-'.$new_cover2;
					
					$config["file_name"] 		= $new_cover3; 
					$config['allowed_types'] 	= 'gif|jpg|jpeg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

					if(!$this->upload->do_upload('gambar')){
						  echo $this->upload->display_errors();
					 }else{
					
						$cover 						= $this->upload->data();
						$cover_url					= 'upload/images/'.$config["file_name"];

						$insert_data = array(
							'judul'		=> $title_banner,
							'sub_judul'	=> $sub_title_banner,
							'gambar'	=> $cover_url,
							'link'		=> $link,
						);

						$this->admin_data_banner_model->update(array('id' => $id), $insert_data);
						
						$this->session->set_flashdata('success', 'Berhasil Menambah Data');
						redirect('admin/data_banner', 'refresh');
					}
					
				}else{
					$insert_data = array(
						'judul'		=> $title_banner,
						'sub_judul'	=> $sub_title_banner,
						'link'		=> $link,
					);

					$this->admin_data_banner_model->update(array('id' => $id), $insert_data);
					
					$this->session->set_flashdata('success', 'Berhasil Menambah Data');
					redirect('admin/data_banner', 'refresh');
				}
				
			}else{
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				
				$this->data['title_banner'] = array(
					'class' 		=> 'form-control',
					'name' 			=> 'title_banner',
					'id' 			=> 'title_banner',
					'type' 			=> 'text',
					'required' 		=> 'required',
					'value' 		=> $this->form_validation->set_value('title_banner', $result_data->judul),
				);
				$this->data['sub_title_banner'] = array(
					'class' 		=> 'form-control',
					'name' 			=> 'sub_title_banner',
					'id' 			=> 'sub_title_banner',
					'type' 			=> 'text',
					'required' 		=> 'required',
					'value' 		=> $this->form_validation->set_value('sub_title_banner', $result_data->sub_judul),
				);
				$this->data['link'] = array(
					'class' 		=> 'form-control',
					'name' 			=> 'link',
					'id' 			=> 'link',
					'type' 			=> 'text',
					'required' 		=> 'required',
					'value' 		=> $this->form_validation->set_value('link', $result_data->link),
				);

				$this->data['id'] 		= $id;
				$this->data['gambar'] 	= $result_data->gambar;
				
				$this->load->view('admin/banner/edit/index', $this->data);
			}

		}else{
			$this->session->set_flashdata('success', 'Maaf data tidak dapat diubah');
			redirect('admin/data_banner', 'refresh');
		}
	}
	

    public function search()
    {
        $search 					= $this->input->post('search');
        $this->data['data_parent'] 	= $this->admin_data_banner_model->get_search(array('judul' => $search), null, $this->table_row, 0, array('id','desc'), 'banner')->result();
		$view 						= $this->load->view('admin/banner/lib/list_page', $this->data);
        return $view;
    }
	
	
	public function delete($id = NULL)
    {
		if(is_null($id))
        {
            $this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
			redirect('admin/data_banner', 'refresh');
        }
        else{
			$this->admin_data_banner_model->delete(array('id'=>$id));
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('admin/data_banner', 'refresh');
		}
    }

}