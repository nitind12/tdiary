<?php
class Assignmentmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("assignment");
		return $query->result();
	}
	
}
?>