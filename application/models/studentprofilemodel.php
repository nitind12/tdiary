<?php
class Studentprofilemodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM std_personal");
		return $q->result_array();
		
		
	}
}

