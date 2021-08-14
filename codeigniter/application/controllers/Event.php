<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('event_model');
    }
    
    function index(){

        $this->load->view('templates/header');
        
        $data = array();
        
        // Fetch products from the database
        $data['events'] = $this->event_model->getEvents();
        // Load the product list view
        $this->load->view('event/index', $data);
        $this->load->view('templates/footer');
    }
}