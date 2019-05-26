<?php
class Edittimrtablemodel extends CI_Model{
	
	function fetchtable()
	{
		$query = $this->db->get("time_table_edit");
		return $query->result();
	}
	function fetchtable2()
	{

	 	$this->db->select('a.*');
		 $this->db->where('a.Faculty_id',$this->session->userdata('facultyid'));
		$this->db->where('a.username',$this->session->userdata('user'));
		$query = $this->db->get("time_table_edit a");
		return $query->result();
	}
	
	function savingdata3()
	{
		$data = array(
			'Day' => $this->input->post('Day'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Course_id' => $this->input->post('Course_Name'),
			'Subject_id' => $this->input->post('Subject_id'),
		    'session_id' => $this->input->post('Session'),
			//'Time_table_id' => $this->input->post('Time_table_id'),
			'Time' => $this->input->post('Time'),
			'Room' => $this->input->post('Room'),


		);
		
		$this->db->insert('time_table_edit',$data);

	}
	public function getmarkstype1()
	{
		$this->db->select('semester_id,no_of_semester');
		$query = $this->db->get('semester');
		return $query->result();
	}
	public function getmarkstype4()
	{
		$this->db->select('course_id,name_of_courses');
		$query = $this->db->get('course_table');
		return $query->result();
	}
	public function getmarkstype6()
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
		$this->db->delete('time_table_edit',array('Subject_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('edittimetablecontroller',array('id' => $a));
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