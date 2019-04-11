<?php
class Update_Assignmentmodel extends CI_Model{
	
	


	/*function internalmarks()
	{
		$intel = array();
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$Subject = $this->input->post('Subject');
		
		$this->db->distinct('b.student_id');
		$this->db->select('a.*, b.first_name');
		$this->db->where('a.Course_name',$Course);
		$this->db->where('a.Semester',$Semester);
		$this->db->where('a.Section',$Section);
		$this->db->where('a.Subject', $Subject);
		$this->db->from('check_assignment1 a');
		$this->db->join('std_personal b', 'b.student_id=a.Student_Roll');

		$q = $this->db->get('check_assignment1');
		
		return $q->result();
	}*/


	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*, c.first_name');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('check_assignment1 a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.student_id=a.Student_Roll');

		$q = $this->db->get('check_assignment1');
		//echo $this->db->last_query(); die();
		return $q->result();
	}
}