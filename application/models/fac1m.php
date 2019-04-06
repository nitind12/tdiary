<?php
class fac1m extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("faculty_personal");
		return $query->result();
	}
	function savingdata4()
	{
		$data = array(
			's_no' => $this->input->post('s_no'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'gender' => $this->input->post('gender'),
			'marital_status' => $this->input->post('marital_status'),
			'father_name' => $this->input->post('father_name'),
			'husband_name' => $this->input->post('husband_name'),
			'nationality' => $this->input->post('nationality')
			'category' => $this->input->post('category')
			'blood_group' => $this->input->post('blood_group')
			'status' => $this->input->post('status')
			'user_name' => $this->input->post('user_name')
			'session' => $this->input->post('session')
			'faculty_id' => $this->input->post('faculty_id')

		);
		
		$this->db->insert('faculty_personal,$data);

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