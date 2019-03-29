<?php
class Marksmodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM studentmarks");
		return $q->result_array();
		
		
	}
}