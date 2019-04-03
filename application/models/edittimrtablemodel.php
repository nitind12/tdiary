<?php
class Edittimrtablemodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("time_table_edit");
		return $query->result();
	}
	function savingdata3()
	{
		$data = array(
			'Day' => $this->input->post('Day'),
			'Semester_id' => $this->input->post('Semester_id'),
			'Section' => $this->input->post('Section'),
			'Course_id' => $this->input->post('Course_id'),
			'Subject_id' => $this->input->post('Subject_id'),
			'Faculty_id' => $this->input->post('Faculty_id'),
			'Time_table_id' => $this->input->post('Time_table_id'),
			'Time' => $this->input->post('Time'),
			'Room' => $this->input->post('Room'),


		);
		
		$this->db->insert('time_table_edit',$data);

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
		$this->db->delete('time_table_edit',array('Time_table_id' => $a));
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