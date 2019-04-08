<?php
class Practicaltestmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("practicaltest");
		return $query->result();
	}
	function savingdata2()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject'),
			'Student_Roll' => $this->input->post('Student_Roll'),
			//'Student_name' => $this->input->post('Student_name'),
			'Practical_marks' => $this->input->post('Practical_marks')
			

		);
		
		$this->db->insert('practicaltest',$data);

	}
	function del($a){
		$this->db->delete('practicaltest',array('Student_Roll' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('practicaltestcontroller',array('id' => $a));
		return;
	}
	/*public function edit()
	{
		$d = $this->db->get_where('studentmarks',array('Student_Roll'->$a))->row();
		return $d;
	}
	function update($id)
	{
		$Student_name = $this->input->post('Student_name');
		$marks1 = $this->input->post('marks1');
		$marks2 = $this->input->post('marks2');
		$data =array(
			'Student_name'=>$Student_name,
			'marks1'=>$marks1,
			'marks2'=>$marks2
		);
		$this->db->where('Student_Roll',$id);
		//$this->db->insert('test'$data);
	}*/
}
?>