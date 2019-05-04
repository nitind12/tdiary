<?php
class Registration_model extends CI_Model{
	function savingdata3()
	{
		
			
		
		$data = array(
			
			'batch_id'=>$this->input->post('batch'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'father_name' => $this->input->post('father_name'),
			'mother_name' => $this->input->post('mother_name'),
			'gender' => $this->input->post('gender'),
			'nationality' => $this->input->post('nationality'),
			'category' =>$this->input->post('category'),
			'blood_group' =>$this->input->post('blood_group'),
			'course_id' =>$this->input->post('regCourse'),
			'session_id'=>$this->input->post('regsession'),
			'username'=>$this->input->post('username'),
			'student_id'=> 'x'

		);

		
		$this->db->insert('std_personal',$data);
		$id_ = $this->db->insert_id();

		$this->db->where('s_no',$id_);
		$sid = date('Y').date('m').$id_;
		$data = array(
			'student_id' => $sid 
		);
		$this->db->update('std_personal', $data);
	
$data = array(
			
			
			
			'address' => $this->input->post('address'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'pincode' => $this->input->post('pincode'),
			'address_status' => '1',
			'date_of_commencement' => $this->input->post('date_of_commencement'),
			'username' =>'ra',

			'student_id' => $sid



		);

		
		$this->db->insert('std_address',$data);
	
	}

	function getprofile()
	{
		
		$this->db->select('st.first_name, st.last_name, st.date_of_birth, st.blood_group,st.course_id, sc.std_contact ,sc.std_email	');
		$this->db->where('student_id','1');
		$this->db->from('std_personal st');
		//$this->db->join('std_contact sc' , 'st.student_id = sc.student_id');
		//$this->db->join('std_address sa, sa.student_id=  st.student_id');
	

		$query=$this->db->get();

		//return $query->result();
		echo $this->db->last_query();
	}
}

