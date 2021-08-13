<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('profile_data');
    }
    
    function index(){

        if ($_SESSION['logged_in'] == true) {
            $this->load->view('templates/logged_header');
        } else {
            $this->load->view('templates/header');
        }
        
        $data = array();
        
        // Fetch products from the database
        $data['profile'] = $this->profile_data->getProfileData();
        // Load the product list view
        $this->load->view('profile/profile', $data);
        $this->load->view('templates/footer');
    }

    public function editForm() {
        
        $data = array();
        
        // Fetch products from the database
        $data['profile'] = $this->profile_data->getProfileData();
        $this->load->view('templates/logged_header');
        $this->load->view('profile/editing_form', $data);
        $this->load->view('templates/footer');
    }

    public function edit() {
        $this->form_validation->set_rules('first_name', 'First Name');
        $this->form_validation->set_rules('last_name', 'Last Name');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth');
        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('email', 'Email Address');

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email')
        );
                    
        $result = $this->profile_data->updateProfile($data);                
        redirect('profile/index');   
    }
}