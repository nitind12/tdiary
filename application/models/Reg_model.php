<?php
class Reg_model extends CI_Model{
	function savingdata34()
	{
		
		$data = array(
			
			'course_of_admission' => $this->input->post('course_of_admission'),
			'date_of_admission' => $this->input->post('date_of_admission'),
			'description' => $this->input->post('description'),
			
			
			'status' => '1',
			
			'username' => 'ra'
		);

		
		$this->db->insert('std_reg',$data);
	
}
}

