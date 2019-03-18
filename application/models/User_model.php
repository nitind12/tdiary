<?php
class User_model extends CI_Model
{
	/*	Public function __construct()
	{
		//parent::__construct();
		//echo "hello world";
		//echo "<br>";
	}

	/*function saverecords()
	{
		//$query="inser into users values('User_id','name','mobile')";
		//$this->db->query($query);

		$query=$this->query('select * from users');
		return $query->result();
	*/
		function fetchtable()
		{
			$query=$this->db->get('users');
			return $query->result(); 
		}

		function savingdata(){
			$data = array(
				'User_id' => $this->input->post('User_id'),
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile')
			);
			$this->db->insert('users', $data);
		}
}
?>