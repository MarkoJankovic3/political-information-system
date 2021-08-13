<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Party extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('party_model');
    }
    
    function index(){

        if ($_SESSION['logged_in'] == true) {
            $this->load->view('templates/logged_header');
        } else {
            $this->load->view('templates/header');
        }
        
        $data = array();
        
        // Fetch products from the database
        $data['parties'] = $this->party_model->getParties();
        // Load the product list view
        $this->load->view('party/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($page) {
        $this->load->helper('url_helper');
          if ( ! file_exists(APPPATH.'views/party/list_of_parties/'.$page.'.php'))
          {
                  // Whoops, we don't have a page for that!
                  show_404();
          }
            
          if ($_SESSION['logged_in'] == true) {
            $this->load->view('templates/logged_header.php');
          } else {
            $this->load->view('templates/header.php');
          }
          $this->load->view('party/list_of_parties/'.$page);
          $this->load->view('templates/footer.php');
  }
}