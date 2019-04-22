<?php
class Registration_model extends CI_Model{
	function savingdata3()
	{
		
			
		
		$data = array(
			
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'father_name' => $this->input->post('father_name'),
			'mother_name' => $this->input->post('mother_name'),
			'gender' => $this->input->post('gender'),
			'nationality' => $this->input->post('nationality'),
			'category' =>$this->input->post('category'),
			'blood_group' =>$this->input->post('blood_group'),
			'course_id' =>$this->input->post('course_id')



		);

		
		$this->db->insert('std_personal',$data);
	

	}

	function getprofile()
	{
		$this->db->select('first_name');
		$this->db->where('student_id','1');

		$this->db->from('std_personal');

			$query=$this->db->get();
		return $query->result();
	}
}

