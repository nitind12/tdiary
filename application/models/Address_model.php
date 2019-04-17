<?php
class Address_model extends CI_Model{
	function savingdata31()
	{
		
			
		
		$data = array(
			
			
			
			'address' => $this->input->post('address'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'pincode' => $this->input->post('pincode'),
			'address_status' => '1',
			'date_of_commencement' => $this->input->post('date_of_commencement'),
			'username' => 'ra'
			



		);

		
		$this->db->insert('std_address',$data);
	

}
}

