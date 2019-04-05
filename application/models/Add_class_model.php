<?php
class Add_class_model extends CI_Model
{
	function fetchClass()
	{
		$query = $this->db->get("add_class");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'faculty_id'=>'ravi',
			'session_id' => $this->input->post('Session'),
			'course_id' => $this->input->post('Course'),
			'semester_id' => $this->input->post('Semester'),
			'section_id' => $this->input->post('Section'),
			'subject_id' => $this->input->post('Subject_Name'),
			'username' => 'ra',
			'status'=>1						

	);
		$this->db->insert('add_class',$data);

	}
	function delClass($no_)
	{	$this->db->where('s_no', $no_);
		$query = $this->db->delete("add_class");
		return $query;
	}
	
}