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
			'Course_id' => $this->input->post('Course_id'),
			'Semester' => $this->input->post('Semester'),
			'Session' => $this->input->post('Session'),
			'Section' => $this->input->post('Section'),
		);	
			$this->db->insert('student_time_table',$data);
		$fileid = $this->db->insert_id();
		echo $this->upload_TT($fileid); die();
	}

       $this->db->insert('student_time_table',$data);

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