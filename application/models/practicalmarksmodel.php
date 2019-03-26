<?php
class Practicalmarksmodel extends CI_Model{
	
	public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM practicaltest");
		return $q->result_array();
		
		/*return [
		['firstname'=>'firstuser','lastname'=>'firstname'],
		['firstname'=>'seconduser','lastname'=>'secondtname'],
		['firstname'=>'thirdtuser','lastname'=>'thirdtname'],
		['firstname'=>'fourthuser','lastname'=>'fourthname'],
		['firstname'=>'fifthuser','lastname'=>'fifthname'],
		['firstname'=>'sixthuser','lastname'=>'sixthname'],
		['firstname'=>'seventhuser','lastname'=>'seventhname'],
	];*/
	}
}