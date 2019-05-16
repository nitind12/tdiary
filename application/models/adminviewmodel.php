<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Adminviewmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("student_time_table");
		return $query->result();
	}
	function savingTTable()
	{
		$data = array(
			'Course_id' => $this->input->post('Course_Name'),
			'Semester' => $this->input->post('Semester'),
			'Session' => $this->input->post('Session'),
			'Section' => $this->input->post('Section'),
		);	
		$this->db->insert('student_time_table',$data);
		$fileid = $this->db->insert_id();
		echo $this->upload_TT($fileid); die();
	}

      
	public function getmarkstype()
	{
		$this->db->select('course_id,name_of_courses');
		$query = $this->db->get('course_table');
		return $query->result();
	}
	public function getmarkstype2()
	{
		$this->db->select('s_id,session');
		$query = $this->db->get('session');
		return $query->result();
	}
	public function getmarkstype1()
	{
		$this->db->select('semester_id,no_of_semester');
		$query = $this->db->get('semester');
		return $query->result();
	}
	/*function saving()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject')

		);
		
		$this->db->insert('data',$data);

	}*/
	function del($a){
		$this->db->delete('student_time_table',array('Section' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('adminviewcontroller',array('id' => $a));
		return;
	}
	
}
?>