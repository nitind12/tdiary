<?php
class Practicalmarksmodel extends CI_Model{
	
	/*public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM practicaltest");
		return $q->result_array();
		
		
	}*/


	function internalmarks()
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
		$this->db->from('practicaltest a');
		$this->db->join('std_personal b', 'b.student_id=a.Student_Roll');

		$q = $this->db->get('practicaltest');
		//echo $this->db->last_query(); die();
		return $q->result();
	}
}