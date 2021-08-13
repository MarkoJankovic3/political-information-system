<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
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
        $this->load->view('templates/header');
        $this->load->view('profile/editing_form');
        $this->load->view('templates/footer');
    }

    public function edit() {

    }
}