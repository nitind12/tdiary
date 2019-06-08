<?php
class Studentprofilemodel extends CI_Model{
	
	public function getData()
	{
		$this->db->select('a.* ,b.father_name ,b.mother_name,b.first_name,b.last_name,b.date_of_birth,
		c.std_email , c.std_contact,d.student_photo,d.student_sig');
		
			$this->db->where('a.username',$this->session->userdata('user'));
	
		$this->db->from('sign_up a');
		$this->db->where('b.student_id',$this->session->userdata('studentid'));
		
		$this->db->join('std_personal b', 'a.student_id=b.student_id');
		
		$this->db->join('std_contact c', 'c.student_id=a.student_id');
		$this->db->join('student_photo d', 'd.student_id=a.student_id');
		
		$query = $this->db->get();
		return $query->result();
					
	}
public function getDatat()
	{
	$this->db->select('a.*,b.father_name,b.first_name,b.last_name,b.date_of_birth,
		c.faculty_email , c.faculty_contact,d.faculty_photo,d.faculty_sig');
		
		$this->db->where('a.username',$this->session->userdata('user'));
		$this->db->from('sign_up a');
		$this->db->where('b.faculty_id',$this->session->userdata('facultyid'));
		
		$this->db->join('faculty_personal b', 'a.student_id=b.faculty_id');
		
		$this->db->join('faculty_contact c', 'c.faculty_id=a.student_id');
		$this->db->join('faculty_profile d', 'd.faculty_id=a.student_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
	
		return $query->result();
					
	}
public function getDatatA()
	{
	$this->db->select('a.*,b.admin_father_name, b.admin_mother_name, b.admin_name, b.date_of_births, b.admin_photo, b.email_id , b.contact_no');
		
		$this->db->from('sign_up a');
		$this->db->where('b.admin_id',$this->session->userdata('adminid'));
		
		$this->db->join('admin_profile b', 'a.student_id=b.admin_id');
		
		$query = $this->db->get();

		//echo $this->db->last_query();die();
	
		return $query->result();
					
	}

}

