<?php
class Contact_model extends CI_Model{
	function savingdata32()
	{
		
			
		
		$data = array(
			
			
			
			'std_email' => $this->input->post('std_email'),
			'std_contact' => $this->input->post('std_contact'),
			'alternate_contact' => $this->input->post('alternate_contact'),
			'email_status' =>  '1',
			'contact_status' => '1',
			'status' => '1',
			'alternate_email' => $this->input->post('alternate_email'),
			'username' => 'ra'
			



		);

		
		$this->db->insert('std_contact',$data);
	

}
}

