<?php
class Studentprofilemodel extends CI_Model{
	
	public function getData()
	{
		$this->db->select('a.*');
		$this->db->from('sign_up a');
		$this->db->where('a.username', $this->session->userdata('user'));
		$query = $this->db->get();
		return $query->result();
			
		
	}
}

