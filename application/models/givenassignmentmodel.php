<?php
class Givenassignmentmodel extends CI_Model{
	
	/*public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM assignment");
		return $q->result_array();
		
		
	}*/


	function internalmarks()
	{
		$intel = array();
		$Course = $this->input->post('Course_name');
		$Semester = $this->input->post('Semester');
		$Section = $this->input->post('Section');
		$Subject = $this->input->post('Subject');
		
		$this->db->distinct('a.Assignment_id');
		//$this->db->select('a.*, b.session');
		$this->db->select('a.*');
		$this->db->where('a.Course_name',$Course);
		$this->db->where('a.Semester',$Semester);
		$this->db->where('a.Section',$Section);
		$this->db->where('a.Subject', $Subject);
		$this->db->from('assignment a');
		//$this->db->join('session b', 'b.s_id=a.Assignment_id');

		$q = $this->db->get('assignment');
		//echo $this->db->last_query(); die();
		return $q->result();
	}
}