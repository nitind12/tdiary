<?php
class Update_Assignmentmodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM check_assignment1");
		return $q->result_array();
		
		
	}
}