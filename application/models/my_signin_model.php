<?php defined('BASEPATH') OR exit('No direct script access allowed');

class My_signin_model extends CI_Model
{

/* public function log_in_correctly() {  
  
       $username_ = $this->input->post('txtUsername');
		$dateofbirth= $this->input->post('dateofbirth');
		$email_ = $this->input->post('txtEmail');
		$phone = $this->input->post('Phone');
		
        $this->db->where('username', $username_);  
        $this->db->where('dateofbirth', $pwd);  
        $this->db->where('$dateofbirth',);  
        $query = $this->db->get('sign_up');  
  
}*/

 	function register()

	{
		$username_ = $this->input->post('txtUsername');
		$pwd = $this->input->post('txtPwd');
		$student_id = $this->input->post('txtstudentid');
		$question = $this->input->post('txtquestion');
		$answer = $this->input->post('txtanswer');

		$cat = $this->input->post('rod');
		
		$this->db->where('username', $username_);
		$this->db->where('student_id', $student_id);
		$q=$this->db->get('std_personal');
		if($q->num_rows()==0)
		{
			$boo1 = false;
		} 
		else 
		{
		$this->db->where('username', $username_);
		$this->db->where('student_id', $student_id);
			$data = array
			(
        			'active_status' =>1
       		);

		$this->db->update('std_personal' ,$data);
		$this->db->where('username', $username_);
		$this->db->where('student_id', $student_id);
		$query=$this->db->get('sign_up');
		

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
}