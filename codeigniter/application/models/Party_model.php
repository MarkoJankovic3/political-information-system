<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Party_model extends CI_Model {
	function __construct() {
		$this->load->database();
		$this->parties = 'PoliticalParty';
	}

	public function getParties($id = ''){
        $this->db->select('*');
        $this->db->from($this->parties);
        if($id){
            $this->db->where('ppid', $id);
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

    public function getParty($id){
        $this->db->select('*');
        $this->db->from($this->parties);
        $this->db->where('party_organization', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        // Return fetched data
        return !empty($result)?$result:false;
    }

    public function join($ppid) {
        $this->db->select('*');
        $this->db->from('Member');
        $this->db->where('cid', $_SESSION['cid']);

        $query = $this->db->get();

        if ($query->num_rows() < 1) {
            $data = array(
                'cid' => $_SESSION['cid'],
                'ppid' => $ppid,
                'role' => 'Member'
            );
            return $this->db->insert('Member', $data);
        } else {
            return false;
        }
    }
}