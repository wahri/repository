<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('postal');
		$this->load->library('rat');
		$this->load->library('costume');
    }

    public function index()
    {
		if ($this->ion_auth->logged_in()) {
            if ($this->ion_auth->is_admin()) {
				redirect('admin/home', $this->data,'refresh');
				
			} else if ($this->ion_auth->is_team()) {
				redirect('team/home', $this->data,'refresh');
				
			} else if ($this->ion_auth->is_member()) {
				redirect('member/home', $this->data,'refresh');
				
			} else {
				redirect('/', 'refresh');
			}
        } else {
			$this->data['title'] = 'Login';
			$this->load->view('login', $this->data);
		}
		
    }

    public function login()
    {
        $this->data['page_title'] = 'Login';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('remember','Remember me','integer');
        $this->form_validation->set_rules('redirect_to','Redirect to','valid_url');
        if($this->form_validation->run()===TRUE)
        {
            $remember = (bool) $this->input->post('remember');
			
			// check for username
			$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
			if(! $login) { // username is not successful
				$this->ion_auth_model->identity_column = 'email';
				// check for email
				$login = $this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember);
			}

			if( $login ) {
				//$this->session->set_flashdata('message', $this->ion_auth->messages());
                if ($this->ion_auth->is_admin()) {
					$this->rat->log('The user logged in');
					redirect('admin/home', $this->data,'refresh');
					
                } else if ($this->ion_auth->is_team()) {
					$this->rat->log('The user logged in');
					redirect('team/home', $this->data);
					
				} else if ($this->ion_auth->is_member()) {
					$this->rat->log('The user logged in');
					redirect('member/home', $this->data,'refresh');
					
                } else {
					redirect('Home', 'refresh');
                }
			} else {
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('Login', 'refresh');
			}
        }
		else{
			$this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect('login', 'refresh');
		}
    }

    public function profile()
    {
        $this->data['page_title'] = 'User Profile';
        $user = $this->ion_auth->user()->row();
        $this->data['user'] = $user;
        $this->data['current_user_menu'] = '';
        if($this->ion_auth->in_group('pemilik'))
        {
            $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim');
        $this->form_validation->set_rules('last_name','Last name','trim');
        $this->form_validation->set_rules('company','Company','trim');
        $this->form_validation->set_rules('phone','Phone','trim');

        if($this->form_validation->run()===FALSE)
        {
            $this->render('pemilik/user/profile_view','admin_master');
        }
        else
        {
            $new_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'company'    => $this->input->post('company'),
                'phone'      => $this->input->post('phone')
            );
            if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');
            $this->ion_auth->update($user->id, $new_data);
            $this->postal->add($this->ion_auth->messages(),'error');
            redirect('pemilik/user/profile');

        }
    }

    public function logout()
    {
        $this->load->library('rat');
        $this->rat->log('The user logged out');
        $this->ion_auth->logout();
        $this->postal->add($this->ion_auth->messages(),'error');
        redirect('login');
    }
}