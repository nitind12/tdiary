<?php
class Givenassignmentmodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM assignment");
		return $q->result_array();
		
		
	}
}