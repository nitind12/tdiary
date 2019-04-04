<?php
class Assignmentmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("assignment");
		return $query->result();
	}
	function savingdata3()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject'),
			'Assignment_id' => $this->input->post('Assignment_id'),
			'Given_date' => $this->input->post('Given_date'),
			'Submission_date' => $this->input->post('Submission_date'),
			'Last_submission_date' => $this->input->post('Last_submission_date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'status' => '1',
			'username' =>'ra'


		);
		
		$this->db->insert('assignment',$data);

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
		$this->db->delete('assignment',array('Assignment_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('assignmentconroller',array('id' => $a));
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