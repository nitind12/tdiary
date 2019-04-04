<?php
class Testmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("studentmarks");
		return $query->result();
	}
	public function savingdata()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject'),
			//'Session' => $this->input->post('Session'),
			'Student_Roll' => $this->input->post('Student_Roll'),
			//'Student_name' => $this->input->post('Student_name'),
			'marks1' => $this->input->post('marks1'),
			'marks2' => $this->input->post('marks2'),
			'status' => '1',
			'username' =>'ra'

		);
		
		$this->db->insert('studentmarks',$data);

	}
	
	function del($a){
		$this->db->delete('studentmarks',array('Student_Roll' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('test',array('id' => $a));
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