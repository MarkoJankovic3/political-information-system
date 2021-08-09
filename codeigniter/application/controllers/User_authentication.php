<?php

class User_authentication extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_database');
	}

	public function login() {
		$this->load->view('templates/header');
		$this->load->view('user_authentication/login');
		$this->load->view('templates/footer');
	}

	public function register() {
		$this->load->view('templates/header');
		$this->load->view('user_authentication/login');	
		$this->load->view('templates/footer');
	}

	public function signin() {

		$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('user_authentication/login');
			$this->load->view('templates/footer');

		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$cid = $this->login_database->login($data);
			if($cid){
					$user_data = array(
						'cid' => $cid,
						'email' => $data['email'],
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					
					redirect('pages/home');

				} else{
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('user_authentication/login');

				}
	}
}

	public function signup() {

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('user_authentication/register');
			$this->load->view('templates/footer');

		} else {

			$data = array(
    			'first_name' => $this->input->post('first_name'),
    			'last_name' => $this->input->post('last_name'),
    			'email' => $this->input->post('email'),
    			'password' => $this->input->post('password')
    		);
					
			$result = $this->login_database->registration($data);
			
			if ($result == TRUE) {

				$this->load->view('templates/header');
				$this->load->view('user_authentication/login', $data);
				$this->load->view('templates/footer');
						
			} else {
				$this->load->view('templates/header');
				$this->load->view('user_authentication/register');
				$this->load->view('templates/footer');
			}		
		}
	}

	public function signout(){
			$this->session->set_userdata('logged_in', false);
			$this->session->unset_userdata('cid');
			$this->session->unset_userdata('email');
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
			redirect('user_authentication/login');

		}
}
