<?php defined('BASEPATH') OR exit('No direct script access allowed');

class My_signup_model extends CI_Model
{

	function register()
	{
		$username_ = $this->input->post('txtUsername');
		$email_ = $this->input->post('txtEmail');
		$first_name = $this->input->post('txtfirst_name');
		$sir_name = $this->input->post('txtsir_name');
		$pwd = $this->input->post('txtPwd');
		$phone = $this->input->post('Phone');
		$question = $this->input->post('txtquestion');
		$answer = $this->input->post('txtanswer');
		$dateofbirth= $this->input->post('dateofbirth');
		$cat = $this->input->post('rod');
		
		$this->db->where('Username', $username_);
		$this->db->or_where('Email', $email_);
		$query = $this->db->get('sign_up');
		
		if($query->num_rows()!=0)
		{
			$bool = false;
		} 
		else 
		{
			$data = array
			(
				'Username'=>$username_,
				'Email'=>$email_,
				'first_name'=>$first_name,	
				'Email'=>$sir_name,	
				'Password'=>$pwd,
				'phone_no'=>$phone,
				'question'=>$question,	
				'answer'=>$answer,	
				'date_of_birth'=>$dateofbirth,
				'category'=>$cat
				
			);
			$this->db->insert('sign_up', $data);
			$bool = true;
		}

		return $bool;
	}
}