<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model {
	function __construct() {
		$this->load->database();
		$this->event = 'Event';
	}

	public function getEvents($id = ''){
        $this->db->select('*');
        $this->db->from($this->event);
        if($id){
            $this->db->where('eventid', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('date', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        
        // Return fetched data
        return !empty($result)?$result:false;
    }
}