<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notiv extends Admin_Controller
{
   
    function __construct()
    {
        parent::__construct();
        $this->load->library('costume');
        $this->load->library('pagination');
        $this->load->helper('fungsidate');
        $this->load->model('public_home_model');
        $this->load->helper(array('url'));
    }

    public function index($id = NULL)
    {
        if($id == NULL){
            echo 'salah';
            //redirect('admin/home', 'refresh');
        }else{
            $cek_data       = $this->public_home_model->get(array('id'=>$id), 'notivikasi');
            if($cek_data->num_rows() > 0){
                $this->public_home_model->update_table(array('id'=>$id), array('status' => 1), 'notivikasi');
                redirect('admin/'.$cek_data->row()->notiv_url, 'refresh');
            }else{
                echo 'salah';
                //redirect('admin/home', 'refresh');
            }
        }
    }
}

