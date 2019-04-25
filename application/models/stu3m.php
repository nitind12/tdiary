<?php
class stu3m extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get('std_contact');
		return $query->result();
	}
	function savingdata50()
	{
		$data = array(
			'std_email' => $this->input->post('std_email'),
			'std_contact' => $this->input->post('std_contact'),
			'alternate_contact' => $this->input->post('alternate_contact'),
			'contact_status' => $this->input->post('contact_status'),
			'email_status' => $this->input->post('email_status'),
			'status' => $this->input->post('status'),
			'alternate_email' => $this->input->post('alternate_email'),
			'std_id' => $this->input->post('student_id'),
			'username' => $this->input->post('username')
			
		);
		
		$this->db->insert('std_contact',$data);

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
		$this->db->delete('std_contact',array('std_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('stu3c',array('id' => $a));
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