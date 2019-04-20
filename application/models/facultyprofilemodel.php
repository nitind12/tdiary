<?php
class Facultyprofilemodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM fac_personal");
		return $q->result_array();
		
		
	}
}

