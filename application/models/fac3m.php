<?php
class fac3m extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("faculty_contact");
		return $query->result();
	}
	function savingdata4()
	{
		$data = array(
			'faculty_email' => $this->input->post('faculty_email'),
			'email_status' => $this->input->post('email_status'),
			'faculty_contact' => $this->input->post('faculty_contact'),
			'faculty_status' => $this->input->post('faculty_status'),
			'contact_status' => $this->input->post('contact_status'),
			'status' => $this->input->post('status'),
			'username' => $this->input->post('username'),
			'faculty_id' => $this->input->post('faculty_id'),
			
		);
		
		$this->db->insert('faculty_contact,$data);

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
		$this->db->delete('check_assignment1',array('Assignment_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('check_assignment_conroller',array('id' => $a));
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