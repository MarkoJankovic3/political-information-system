<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_data extends CI_Model {
	function __construct() {
		$this->load->database();
		$this->profile = 'Citizen';
	}

	public function getProfileData($id = ''){
        $this->db->select('*');
        $this->db->from($this->profile);
        $this->db->where('cid', $_SESSION['cid']);
        $query = $this->db->get();
        $result = $query->row_array();
        
        // Return fetched data
        return !empty($result)?$result:false;
    }
}