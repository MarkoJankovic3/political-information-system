<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy_model extends CI_Model {
	function __construct() {
		$this->load->database();
		$this->policies = 'Policy';
	}

	public function getPolicies($id = ''){
        $this->db->select('*');
        $this->db->from($this->policies);
        if($id){
            $this->db->where('policyid', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('name', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        
        // Return fetched data
        return !empty($result)?$result:false;
    }
}