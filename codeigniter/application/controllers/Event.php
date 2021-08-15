<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load party model
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('event_model');
    }
    
    function index(){

        $this->load->view('templates/header');
        
        $data = array();
        
        // Fetch products from the database
        $data['events'] = $this->event_model->getAllEvents();
        // Load the product list view
        $this->load->view('event/index', $data);
        $this->load->view('templates/footer');
    }

    public function view() {
        $data_id = $this->uri->segment(3);
        $data = array();
        
        // Fetch products from the database
        $data['event'] = $this->event_model->getEvent($data_id);
    

        $this->load->view('templates/header');
        $this->load->view('event/view', $data);
        $this->load->view('templates/footer');
    }

    function create() {
        $this->load->view('templates/header');
        $this->load->view('event/create');
        $this->load->view('templates/footer');
    }

    function edit() {
        $data_id = $this->uri->segment(3);
        $data = array();
        
        // Fetch products from the database
        $data['event'] = $this->event_model->getEvent($data_id);
        $this->load->view('templates/header');
        $this->load->view('event/edit', $data);
        $this->load->view('templates/footer');
    }

    function createEvent() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');

        $data = array(
            'name' => $this->input->post('name'),
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location')
        );
                    
        $result = $this->event_model->createEvent($data);                
        redirect('event/index');
    }

    function editEvent($id) {

        $this->form_validation->set_rules('name', 'Name');
        $this->form_validation->set_rules('date', 'Date');
        $this->form_validation->set_rules('location', 'Location');

        $data = array(
            'name' => $this->input->post('name'),
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location')
        );
                    
        $result = $this->event_model->editEvent($data, $id);     

        redirect('event/index');    
        
    }

    public function deleteEvent($id) {
        $this->event_model->deleteEvent($id);
        redirect('event/index');
    }

    public function join($id) {
        $this->event_model->joinEvent($id);

        redirect('event/index');
    }
}