<?php
class Check_assign_report_model extends CI_Model{
	function assignment_report()
	{
		$intel = array();
		$Session = $this->input->post('Session');
		$roll_no = $this->input->post('roll_no');
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$Subject = $this->input->post('Subject');
		
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*,b.roll_no,b.assignment_id, b.assignment_status,b.checker_date,b.Grade,c.first_name');
		$this->db->where('a.session_id',$Session);
		$this->db->where('a.course_id',$Course);
		$this->db->where('a.semester_id',$Semester);
		$this->db->where('a.section_id',$Section);
		$this->db->where('a.subject_id', $Subject);
		$this->db->where('b.roll_no',$roll_no);
		$this->db->from('add_class a');
		$this->db->join('assignment_checker b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.Student_id=b.roll_no');

		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
	}
	




	function marks1_report()
	{
		$intel = array();
		$Session = $this->input->post('Session');
		$roll_no = $this->input->post('roll_no');
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$marks_type_id = $this->input->post('marks_type_id');
		
		
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.session_id,a.course_id,a.semester_id,a.section_id,a.subject_id,b.roll_no,b.marks, b.totalmarks,c.first_name');
		$this->db->where('a.session_id',$Session);
		$this->db->where('a.course_id',$Course);
		$this->db->where('a.semester_id',$Semester);
		$this->db->where('a.section_id',$Section);
		$this->db->where('b.roll_no',$roll_no);
		$this->db->where('b.marks_type_id',$marks_type_id);
		$this->db->from('add_class a');
		$this->db->join('studentmarks b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.Student_id=b.roll_no');
		

		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
	}

	public function getmarkstype()
	{
		$this->db->select('marks_type_id,marks_name');
		$query = $this->db->get('marks_type');
		return $query->result();
	}
	
	
}
