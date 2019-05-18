<?php
class Studentprofilemodel extends CI_Model{
	
	public function getData()
	{
		$this->db->select('a.* ,b.father_name ,b.mother_name,b.first_name,b.last_name,b.date_of_birth,
			c.std_email, c.std_contact' );
		$this->db->where('a.username',$this->session->userdata('user'));
	
		$this->db->from('sign_up a');
		
		$this->db->join('std_personal b', 'a.student_id=b.student_id');
		
		$this->db->where('b.student_id',$this->session->userdata('studentid'));
		$this->db->join('std_contact c', 'c.student_id=a.student_id');
		
		$query = $this->db->get();
		return $query->result();
			
		
	}
}

