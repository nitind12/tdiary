<?php defined('BASEPATH') OR exit('No direct script access allowed');

class My_signin_model extends CI_Model
{
 	function register()
	{
		$username_ = $this->input->post('txtUsername');
		$pwd = $this->input->post('txtPwd');
		$student_id = $this->input->post('txtstudentid');
		$question = $this->input->post('txtquestion');
		$answer = $this->input->post('txtanswer');
		$dateofbirth= $this->input->post('dateofbirth');
		$cat = $this->input->post('rod');
		$this->db->where('username', $username_);
		$query = $this->db->get('sign_up');
		
		if($query->num_rows()!=0)
		{
			$bool = false;
		} 
		else 
		{
			$data = array
			(
				'username'=>$username_,
				'password'=>$pwd,
				'question'=>$question,	
				'answer'=>$answer,	
				'student_id'=>$student_id,
				'category'=>$cat
				
			);
			$this->db->insert('sign_up', $data);
			$bool = true;
		}

		return $bool;
	}
}