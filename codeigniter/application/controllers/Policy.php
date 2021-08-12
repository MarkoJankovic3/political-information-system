<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('policy_model');
    }
    
    function index(){

        if ($_SESSION['logged_in'] == true) {
            $this->load->view('templates/logged_header');
        } else {
            $this->load->view('templates/header');
        }
        
        $data = array();
        
        // Fetch products from the database
        $data['policies'] = $this->policy_model->getPolicies();
        // Load the product list view
        $this->load->view('policy/index', $data);
        $this->load->view('templates/footer');
    }
}