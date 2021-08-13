<?php
class Login_database extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

    public function registration($data) {

    	return $this->db->insert('Citizen', $data);
    
    }

	public function login($data) {

		$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->where($condition);
		$query = $this->db->get('Citizen');

		if($query->num_rows() == 1){
				return $query->row(0)->cid;
			} else{
				return false;
			}
	}

	public function read_user_information($email) {

		$condition = "email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('Citizen');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function check_email_exists($email){
			$query = $this->db->get_where('Citizen', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else{
				return false;
			}
		}
}