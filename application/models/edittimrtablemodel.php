<?php
class Edittimrtablemodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("time_table_edit");

		return $query->result();
	}
	function time_edit_modals()
	{
		$time_table=array();
		$this->db->where('username',$this->session->userdata('username'));
		$this->db->where('faculty_id',$this->session->userdata('facultyid'));
		$query = $this->db->get("time_table_edit");
		//echo $this->db->last_query();die();

		return $query->result();
	}
	
	function savingdata3()
	{
		$data = array(
			'Day' => $this->input->post('Day'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Course_id' => $this->input->post('Course_Name'),
			'Subject_id' => $this->input->post('Subject'),
		    'session_id' => $this->input->post('Session'),
			'Time' => $this->input->post('Time'),
			'Room' => $this->input->post('Room'),
			'username' => $this->session->userdata('user'),
		    'faculty_id' =>$this->session->userdata('facultyid')

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
	function getSubjectT()
		{
			$course_id = $this->input->post('Course_Name');
			$Semester_id = $this->input->post('Semester');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->order_by('subject_id');
		$query = $this->db->get('subject');
		//echo $this->db->last_query();die();
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

	function updatedColumn()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $tt_id=$this->input->post('tt_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('Subject_id', $tt_id);
        $data = array(
        	$col => $dt
        );
        $query = $this->db->update('time_table_edit', $data);
        return $query;
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
/*function timetable()
	{
		$intel = array();
		$Day = $this->input->post('day');
		
		
		$this->db->distinct('a.Day');
		$this->db->select('a.*');
		$this->db->where('a.Day',$Day);
		
		$this->db->from('time_table_edit a');
		

		$q = $this->db->get('time_table_edit');
		return $q->result();
		//'status' =>'1';
		//'username' ->$this->session->userdata('user');
		//echo  $this->db->last_query();
	}*/




?>