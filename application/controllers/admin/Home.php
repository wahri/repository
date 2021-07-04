<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller
{
    protected $table_row = 10;
    function __construct()
    {
        parent::__construct();
        $this->load->library('costume');
        $this->load->library('pagination');
        $this->load->helper('fungsidate');
        $this->load->model('public_home_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $this->data['title']                    = 'Dashboard';
        $this->data['mahasiswa']                = $this->public_home_model->get_list_member(array('users_groups.group_id' => 5), null, null, array('users.id','desc'))->num_rows();
        $this->data['dosen']                    = $this->public_home_model->count_where(null, 'dosen');
        $this->data['skripsi']                  = $this->public_home_model->count_where(null, 'skripsi');
        $this->data['praktek']                  = $this->public_home_model->count_where(null, 'kerja_praktek');
        $config['per_page']                     = 10;
        $pagging                                = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $jumlah_data                            = $this->public_home_model->get_list(array('for_user'=>'admin', 'status' => 0), null, null, array('id','desc'), 'notivikasi')->num_rows();
        
        $config['base_url']                     = site_url('admin/home/index/');
        $config['full_tag_open']                = '<ul class="pagination">';
        $config['full_tag_close']               = '</ul>';
        $config['prev_link']                    = '&lt;';
        $config['prev_tag_open']                = '<li>';
        $config['prev_tag_close']               = '</li>';
        $config['next_link']                    = '&gt;';
        $config['next_tag_open']                = '<li>';
        $config['next_tag_close']               = '</li>';
        $config['cur_tag_open']                 = '<li class="active"><a href="#">';
        $config['cur_tag_close']                = '</a></li>';
        $config['num_tag_open']                 = '<li>';
        $config['num_tag_close']                = '</li>';
        $config['first_tag_open']               = '<li>';
        $config['first_tag_close']              = '</li>';
        $config['last_tag_open']                = '<li>';
        $config['last_tag_close']               = '</li>';
        $config['first_link']                   = '&lt;&lt; Previous';
        $config['last_link']                    = 'Next &gt;&gt;';
        $config['total_rows']                   = $jumlah_data;
        
        $this->pagination->initialize($config); 
        $start                                  = (int)$this->uri->segment(4) +1;
        if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
            $end = $config['total_rows'];
        } else {
            $end = (int)$this->uri->segment(4) + $config['per_page'];
        }
        
        $this->data['result_count']             = "Showing ".$start." - ".$end." of ".$jumlah_data." Results";
        $this->data['data_parent']              = $this->public_home_model->get_list(array('for_user'=>'admin', 'status' => 0),$config['per_page'], $pagging, array('id','desc'), 'notivikasi')->result();             
        
        $this->load->view('admin/home/index', $this->data);
    }

    public function notiv($id = NULL)
    {
        if($id == NULL){
            redirect('admin/home', 'refresh');
        }else{
            $cek_data       = $this->public_home_model->get(array('id'=>$id), 'notivikasi');
            if($cek_data->num_rows() > 0){
                $this->public_home_model->update_table(array('id'=>$id), array('status' => 1), 'notivikasi');
                redirect('admin/'.$cek_data->row()->notiv_url, 'refresh');
            }else{
                redirect('admin/home', 'refresh');
            }
        }
    }

    public function clear_cache()
    {
        $leave_files = array('.htaccess', 'index.html');
        $i = 0;
        foreach( glob(APPPATH.'cache/*') as $file ) {
            if(!in_array(basename($file), $leave_files))
            {
                unlink($file);
                $i++;
            }
        }
        $this->session->set_flashdata('message', $i.' files were deleted from the cache directory.');
        redirect('admin','refresh');
    }
}

