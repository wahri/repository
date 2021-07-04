<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_member extends Admin_Controller
{
	protected $table_row = 10;
	
    function __construct()
    {
        parent::__construct();
		$this->load->library('costume');
        $this->load->model('admin_user_model');
		$this->load->library('pagination');
		$this->load->helper(array('url'));
    }

    public function index()
    {
		$url = $this->uri->segment(1);
		$this->data['title'] 					= 'Data Member';
		$this->data['jumlah_semua'] 			= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
		$this->data['jumlah_item'] 				= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, 0, array('users.id','desc'))->num_rows();
		
		//pagging
		$jumlah_data 							= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
		$config['full_tag_open'] 				= '<ul class="pagination">';
		$config['full_tag_close'] 				= '</ul>';
		$config['prev_link'] 					= '&lt;';
		$config['prev_tag_open'] 				= '<li class="paginate_button previous">';
		$config['prev_tag_close'] 				= '</li>';
		$config['next_link'] 					= '&gt;';
		$config['next_tag_open'] 				= '<li class="paginate_button next">';
		$config['next_tag_close'] 				= '</li>';
		$config['cur_tag_open'] 				= '<li class="paginate_button active"><a href="#">';
		$config['cur_tag_close'] 				= '</a></li>';
		$config['num_tag_open'] 				= '<li class="paginate_button">';
		$config['num_tag_close'] 				= '</li>';
		$config['first_tag_open'] 				= '<li class="paginate_button previous">';
		$config['first_tag_close'] 				= '</li>';
		$config['last_tag_open'] 				= '<li class="paginate_button next">';
		$config['last_tag_close'] 				= '</li>';
		$config['first_link'] 					= '&lt;&lt; Previous';
		$config['last_link'] 					= 'Next &gt;&gt;';
		$config['base_url'] 					= site_url($url.'/user_member/page');
		$config['total_rows'] 					= $jumlah_data;
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);
		
		$this->data['user_parent'] 		= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), $config['per_page'], $pagging, array('users.id','desc'))->result();
		$this->load->view('admin/user_member/view/index', $this->data);
    }
	
	public function page($id = NULL)
    {
		$url 									= $this->uri->segment(1);
		$this->data['title'] 					= 'Data Member';
		$this->data['jumlah_semua'] 			= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
		$this->data['jumlah_item'] 				= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, 0, array('users.id','desc'))->num_rows();
		
		//pagging
		$jumlah_data 							= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
		$config['full_tag_open'] 				= '<ul class="pagination">';
		$config['full_tag_close'] 				= '</ul>';
		$config['prev_link'] 					= '&lt;';
		$config['prev_tag_open'] 				= '<li class="paginate_button previous">';
		$config['prev_tag_close'] 				= '</li>';
		$config['next_link'] 					= '&gt;';
		$config['next_tag_open'] 				= '<li class="paginate_button next">';
		$config['next_tag_close'] 				= '</li>';
		$config['cur_tag_open'] 				= '<li class="paginate_button active"><a href="#">';
		$config['cur_tag_close'] 				= '</a></li>';
		$config['num_tag_open'] 				= '<li class="paginate_button">';
		$config['num_tag_close'] 				= '</li>';
		$config['first_tag_open'] 				= '<li class="paginate_button previous">';
		$config['first_tag_close'] 				= '</li>';
		$config['last_tag_open'] 				= '<li class="paginate_button next">';
		$config['last_tag_close'] 				= '</li>';
		$config['first_link'] 					= '&lt;&lt; Previous';
		$config['last_link'] 					= 'Next &gt;&gt;';
		$config['base_url'] 					= site_url($url.'/user_member/page');
		$config['total_rows'] 					= $jumlah_data;
		$config['per_page'] 					= 10;
		$pagging 								= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$this->pagination->initialize($config);
		
		$this->data['user_parent'] 				= $this->admin_user_model->get_list(array('users_groups.group_id' => 5), $config['per_page'], $pagging, array('users.id','desc'))->result();
		$this->load->view('admin/user_member/view/index', $this->data);
    }
	
	//on
    public function delete($user_id = NULL)
    {
		if(is_null($user_id))
        {
            $this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
			redirect('admin/user_member', 'refresh');
        }
        else{
			if($user_id == $this->ion_auth->get_user_id()){
				$this->session->set_flashdata('success', 'Maaf data tidak dapat dihapus');
				redirect('admin/user_member', 'refresh');
			}else{
				$this->session->set_flashdata('success', 'User Berhasil dihapus');
				$this->ion_auth->delete_user($user_id);
				redirect('admin/user_member', 'refresh');
			}
        }
    }
	
	//on 
    public function search()
    {
        $search = $this->input->post('search');
        $this->data['user_parent'] = $this->admin_user_model->search(array('users.username' => $search), $this->table_row, 0, array('users_groups.group_id' => 5), array('users.id','desc'))->result();
        $view = $this->load->view('admin/user_member/lib/list_page', $this->data);
        return $view;

    }
	

}