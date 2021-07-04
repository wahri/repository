<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_App extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}	
}

class Admin_Controller extends MY_App
{

	function __construct()
	{
		parent::__construct();
        $this->load->library(array('session','form_validation','ion_auth','postal','rat'));

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('admin/user/login', 'refresh');
		}
        $current_user = $this->ion_auth->user()->row();
        $this->user_id = $current_user->id;
        $_SESSION['user_id'] = $this->user_id;
        $this->data['current_user'] = $current_user;
		$this->data['current_user_menu'] = '';
		if($this->ion_auth->in_group('admin'))
		{
			$this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
		}

		$this->data['page_title'] = 'CI App - Dashboard';
	}
	protected function render($the_view = NULL, $template = 'admin_master')
	{
		parent::render($the_view, $template);
	}
}

class Public_Controller extends MY_App
{
    function __construct()
	{
        parent::__construct();
        $this->load->model('banned_model');
        $ips = $this->banned_model->fields('ip')->set_cache('banned_ips',3600)->get_all();
        $banned_ips = array();
        if(!empty($ips))
        {
            foreach($ips as $ip)
            {
                $banned_ips[] = $ip->ip;
            }
        }
        if(in_array($_SERVER['REMOTE_ADDR'],$banned_ips))
        {
            echo 'You are banned from this site.';
            exit;
        }
        if($this->website->status == '0') {
            $this->load->library('ion_auth');
            if (!$this->ion_auth->logged_in()) {
                redirect('offline', 'refresh', 503);
            }
        }
	}

    protected function render($the_view = NULL, $template = 'public_master')
    {
        $this->load->library('menus');
        $this->data['top_menu'] = $this->menus->get_menu('top-menu','bootstrap_menu');
        parent::render($the_view, $template);
    }


}