<?php
class Assign_report_model extends CI_Model{
	function assignment_report()
	{
		$intel = array();
		$Session = $this->input->post('Session');
		$A_no = $this->input->post('Assignment_no');
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$Subject = $this->input->post('Subject');
		
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*,b.Assignment_no, b.Given_date,b.Submission_date,b.Unit,b.Topic');
		$this->db->where('a.session_id',$Session);
		$this->db->where('a.course_id',$Course);
		$this->db->where('a.semester_id',$Semester);
		$this->db->where('a.section_id',$Section);
		$this->db->where('a.subject_id', $Subject);
		$this->db->where('b.Assignment_no',$A_no);
		$this->db->from('add_class a');
		$this->db->join('assignment b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
	}
	
}
