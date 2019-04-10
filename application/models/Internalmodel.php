<?php
class Internalmodel extends CI_Model{
	function internalmarks()
	{
		$intel = array();
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$Subject = $this->input->post('Subject');
		
		$this->db->distinct('b.Student_id');
		$this->db->select('a.*, b.first_name');
		$this->db->where('a.Course_name',$Course);
		$this->db->where('a.Semester',$Semester);
		$this->db->where('a.Section',$Section);
		$this->db->where('a.Subject', $Subject);
		$this->db->from('studentmarks a');
		$this->db->join('std_personal b', 'b.Student_id=a.Student_Roll');

		$q = $this->db->get('studentmarks');
		//echo $this->db->last_query();
		return $q->result();
	}
	
}
