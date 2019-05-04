<?php
class Studentprofilemodel extends CI_Model{
	
	public function getData()
	{
		$this->db->select('a.* ,b.father_name ,b.mother_name');
		$this->db->from('sign_up a');
		$this->db->join('std_personal b', 'a.student_id=b.student_id');
		$this->db->where('a.username', $this->session->userdata('user'));
		$query = $this->db->get();
		return $query->result();
			
		
	}
}

