<?php
class Stu4m extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("std_academic");
		return $query->result();
	}
	function savingdata40()
	{
		$data = array(
			's_no' => $this->input->post('s_no'),
			'student_id' => $this->input->post('student_id'),
			'qualification_status' => $this->input->post('qualification_status'),
			'passing_year' => $this->input->post('passing_year'),
			'school' => $this->input->post('school'),
			'board' => $this->input->post('board'),
			'percentage' => $this->input->post('percentage'),
			'status' => '1',
			'username' => 'ra',
			

			
		);
		
		$this->db->insert('std_academic',$data);

	}
	/*function savingdata4()
	{
		$data = array(
			's_no' => $this->input->post('s_no'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'father_name' => $this->input->post('father_name'),
			'mother_name' => $this->input->post('mother_name'),
			'gender' => $this->input->post('gender'),
			'nationality' => $this->input->post('nationality'),
			'category' => $this->input->post('category'),
			'blood_group' => $this->input->post('blood_group'),
			'status' => $this->input->post('status'),
			'student_id' => $this->input->post('student_id'),
			'username' => $this->input->post('username')
		);
		
		$this->db->insert('std_personal',$data);

	}*/
	function del($a){
		$this->db->delete('std_academic',array('student_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('stu4c',array('id' => $a));
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