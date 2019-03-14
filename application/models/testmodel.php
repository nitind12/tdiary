<?php
class Testmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("studentmarks");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'Student_Roll' => $this->input->post('Student_Roll'),
			'Student_name' => $this->input->post('Student_name'),
			'marks1' => $this->input->post('marks1'),
			'marks2' => $this->input->post('marks2')

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
}
?>