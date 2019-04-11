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

}