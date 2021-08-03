<?php

class User_authentication extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
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

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('user_authentication/register');
			$this->load->view('templates/footer');

		} else {

			$data = array(
				'user_name' => $this->input->post('username'),
				'user_email' => $this->input->post('email_value'),
				'user_password' => $this->input->post('password')
			);
					
			$result = $this->login_database->registration_insert($data);
			
			if ($result == TRUE) {

				$data['message_display'] = 'Registration Successfully !';
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