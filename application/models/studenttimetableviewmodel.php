<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Studenttimetableviewmodel extends CI_Model{
	function fetchtable()
	{
		$this->db->where('a.session_id',$this->session->userdata('sin'));
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));
		
		$query = $this->db->get("student_time_table a");
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
	

       $this->db->insert('student_time_table',$data);

	}

	public function getmarkstype()
	{
		$this->db->select('course_id,name_of_courses');
		$query = $this->db->get('course_table');
		return $query->result();
	}
	public function getmarkstype1()
	{
		$this->db->select('semester_id,no_of_semester');
		$query = $this->db->get('semester');
		return $query->result();
	}
	public function getmarkstype2()
	{
		$this->db->select('s_id,session');
		$query = $this->db->get('session');
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
		$this->db->delete('Studenttimetableviewcontroller',array('id' => $a));
		return;
	}
	/*public function edit($a)
	{
		$d = $this->db->get_where('studentmarks',array('Student_Roll'=>$a))->row();
		return $d;
	}
	function update($id)
	{
		$Student_Roll = $this->input->post('Student_Roll');
		$Student_name = $this->input->post('Student_name');
		$marks1 = $this->input->post('marks1');
		$marks2 = $this->input->post('marks2');
		$data =array(
			'Student_Roll' => $Student_Roll,
			'Student_name'=>$Student_name,
			'marks1'=>$marks1,
			'marks2'=>$marks2
		);
		$this->db->where('Student_Roll',$id);
		$this->db->insert('test',$data);
	}*/
}
?>