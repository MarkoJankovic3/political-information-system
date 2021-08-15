<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model {
	function __construct() {
		$this->load->database();
		$this->event = 'Event';
	}

	public function getAllEvents($id = ''){
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

    public function getEvent($id) {

        $this->db->select('*');
        $this->db->from($this->event);
        $this->db->where('eventid', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        // Return fetched data
        return !empty($result)?$result:false;
    }

    public function createEvent($data) {
        return $this->db->insert($this->event, $data);
    }

    public function editEvent($data, $data_id) {
        $this->db->where('eventid', $data_id);
        return $this->db->update($this->event, $data);
    }

    public function deleteEvent($id) {
        $this->db->where('eventid', $id);
        return $this->db->delete($this->event);
    }

    public function joinEvent($id) {
        $data = array(
            'cid' => $_SESSION['cid'],
            'eventid' => $id
        );

        $this->db->insert('Citizen_Event', $data);
    }
}