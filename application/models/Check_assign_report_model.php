<?php
class Check_assign_report_model extends CI_Model{
	
	function assignment_report()
	{
		$intel = array();
		$Subject = $this->input->post('Subject');
		//$assignment_id=$this->input->post('Assignment_no');
		

		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*,b.roll_no,b.assignment_id,b.assignment_status,b.checker_date,b.Grade,c.first_name');
		$this->db->where('a.session_id',$this->session->userdata('sin'));
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));
		$this->db->where('a.section_id',$this->session->userdata('cot'));
		$this->db->where('b.subject_id', $Subject);
		//$this->db->where('b.assignment_id',$assignment_id);
		
		$this->db->where('b.roll_no',$this->session->userdata('studentid'));
		
		$this->db->from('add_class a');
		$this->db->join('assignment_checker b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.Student_id=b.roll_no');

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	}
	

  

	function marks1_report()
	{
		$intel = array();
		$Subject = $this->input->post('Subject');
		$marks_type_id = $this->input->post('marks_type_id');
		
		
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*,b.subject_id,b.roll_no,b.marks, b.totalmarks,c.first_name ,b.percentage,d.subject_name ');
		$this->db->where('a.session_id',$this->session->userdata('sin'));
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));
		$this->db->where('a.section_id',$this->session->userdata('cot'));
		$this->db->where('b.roll_no',$this->session->userdata('studentid'));
		$this->db->where('b.subject_id',$Subject);
		
		$this->db->where('b.marks_type_id',$marks_type_id);
		$this->db->from('add_class a');
		$this->db->join('studentmarks b', 'b.add_class_id=a.add_class_id');
		$this->db->join('subject d', 'd.subject_id=b.subject_id');
		$this->db->join('std_personal c', 'c.Student_id=b.roll_no');
		

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	}
	function marks1_report2()
	{
		$intel = array();
		$marks_type_id = $this->input->post('marks_type_id');
		
		
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*,b.subject_id,b.roll_no,b.marks,b.totalmarks,c.first_name,b.percentage,d.subject_name ');
		$this->db->where('a.session_id',$this->session->userdata('sin'));
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));
		$this->db->where('a.section_id',$this->session->userdata('cot'));
		$this->db->where('b.roll_no',$this->session->userdata('studentid'));
		
		$this->db->where('b.marks_type_id',$marks_type_id);
		$this->db->from('add_class a');
		$this->db->join('studentmarks b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.Student_id=b.roll_no');
		$this->db->join('subject d', 'd.subject_id=b.subject_id');
		

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	}

	public function getmarkstype()
	{
		$this->db->select('marks_type_id,marks_name');
		$query = $this->db->get('marks_type');
		return $query->result();
	}
	
	
}
