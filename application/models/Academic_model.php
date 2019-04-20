<?php
class Academic_model extends CI_Model{
	function savingdata33()
	{
		
			
		
		$data = array(
			
			
			
			'qualification_status' => $this->input->post('qualification_status'),
			'passing_year' => $this->input->post('passing_year'),
			'school' => $this->input->post('school'),
			'board' =>  $this->input->post('board'),
			'percentage' => $this->input->post('percentage'),
			'status' => '1',
			
			'username' => 'ra'
			



		);

		
		$this->db->insert('std_academic',$data);
	

}
}

