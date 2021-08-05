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
		$this->load->view('user_authentication/register');
		$this->load->view('templates/footer');
	}

	public function signin() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	}

	public function signup() {

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');
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
}
