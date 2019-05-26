<?php
class Update_Assignmentmodel extends CI_Model{



	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.assignment_id');
		$this->db->select('a.*, c.first_name');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment_checker a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.student_id=a.roll_no');

		$q = $this->db->get('assignment_checker');
		return $q->result();
	}
	 function view_given_assignment_final()
	 {
	 	 $no_ = $this->input->post('addclassidCA');
            $sess = $this->input->post('sessionidCA');
            $cours = $this->input->post('courseidCA');
            $subid = $this->input->post('subjectidCA');
		$this->db->distinct('a.roll_no');
		$this->db->select('a.roll_no');
		$this->db->where('a.add_class_id' ,$no_);
		$this->db->where('b.session_id' ,$sess);
		$this->db->where('b.course_id' ,$cours);
		$this->db->where('a.subject_id' ,$subid);
		
		$this->db->from('assignment_checker a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	
	 }
	  function view_given_assignment_final2()
	 { 
	 	$no_ = $this->input->post('addclassidCA');
            $sess = $this->input->post('sessionidCA');
            $cours = $this->input->post('courseidCA');
            $subid = $this->input->post('subjectidCA');

	 	$this->db->distinct('a.assignment_id');
		$this->db->select('a.assignment_id');
		$this->db->where('a.add_class_id' ,$no_);
		$this->db->where('b.session_id' ,$sess);
		$this->db->where('b.course_id' ,$cours);
		$this->db->where('a.subject_id' ,$subid);
		
		$this->db->from('assignment_checker a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	
	 }
 function view_given_assignment_final3()
	 { 
	 	$no_ = $this->input->post('addclassidCA');
            $sess = $this->input->post('sessionidCA');
            $cours = $this->input->post('courseidCA');
            $subid = $this->input->post('subjectidCA');

	 	$this->db->distinct('a.assignment_id');
		$this->db->select('a.*');
		$this->db->where('a.add_class_id' ,$no_);
		$this->db->where('b.session_id' ,$sess);
		$this->db->where('b.course_id' ,$cours);
		$this->db->where('a.subject_id' ,$subid);
		
		$this->db->from('assignment_checker a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	
	 }

}