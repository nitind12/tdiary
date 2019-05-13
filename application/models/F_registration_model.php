<?php
class F_registration_model extends CI_Model{
	function savingdata3()
	{
		
			
		
		$data = array(
			
			
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'father_name' => $this->input->post('father_name'),
			
			'gender' => $this->input->post('gender'),
			'nationality' => $this->input->post('nationality'),
			'category' =>$this->input->post('category'),
			'blood_group' =>$this->input->post('blood_group'),
			
			'username'=>$this->input->post('username'),
			'marital_status'=>$this->input->post('marital_status'),
			'faculty_id'=> 'x'

		);

		
		$this->db->insert('faculty_personal',$data);
		$id_ = $this->db->insert_id();

		$this->db->where('faculty_personal_id',$id_);
		$sid = date('Y').date('m').$id_;
		$data = array(
			'faculty_id' => $sid 
		);
		$this->db->update('faculty_personal', $data);

		$data = array(
			'faculty_email' => $this->input->post('faculty_email'),
			'faculty_contact' => $this->input->post('faculty_contact'),
			'alternate_contact' => $this->input->post('alternate_contact'),
			'alternate_email' => $this->input->post('alternate_email'),
			'email_status' => '1',
			'contact_status' => '1',
			'faculty_status' => '1',
			'status' => '1',
			'username' => $this->session->userdata('user'),

		);
		$this->db->insert('faculty_contact',$data);

	
$data = array(
			
			
			
			'address' => $this->input->post('address'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city'),
			'pincode' => $this->input->post('pincode'),
			'address_status' => '1',
			'address_sign' => '1',
			'username' => $this->session->userdata('user'),

			'faculty_id' => $sid



		);

		
		$this->db->insert('faculty_address',$data);

		$data = array(
	
			'address' => $this->input->post('addressname1'),
			'state' => $this->input->post('statename1'),
			'city' => $this->input->post('cityname1'),
			'pincode' => $this->input->post('pincodename1'),
			'address_sign' => '2',
			
			'address_status' => '1',
			'username' =>'ra',
			'faculty_id' => $sid
		);
		
		$this->db->insert('faculty_address',$data);

		$data = array(

			
			'teacher_experience' => $this->input->post('teacher_experience'),
			'date_of_joining' => $this->input->post('date_of_joining'),
			
			'faculty_id' => $sid ,
			'status' => '1',
			'username' => $this->session->userdata('user'),



		);
		$this->db->insert('faculty_profile',$data);

		$fileid = $this->db->insert_id();
		$path_id = $this->upload_ttres($fileid);
		$path_id1 = $this-> upload_ttphoto($fileid);
		$path_id2 = $this->upload_ttsign($fileid);

		$this->db->where('faculty_profile_id', $fileid);
		$data = array(
			'resume' => $path_id,
			'faculty_photo' => $path_id1,
			'faculty_sig' => $path_id2
	
		);
		$this->db->update('faculty_profile', $data);
	
	}
	function upload_ttsign($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/ttdocs/',
	        'allowed_types'=>'jpg|png',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        $file_element_name='Signature';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji1=$this->upload->data();
	        $path_=$path_ji1['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
    }
	function upload_ttres($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/ttdocs/',
	        'allowed_types'=>'pdf|docx',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        $file_element_name='resume';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji=$this->upload->data();
	        $path_=$path_ji['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
    }
	
	function upload_ttphoto($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/ttdocs/',
	        'allowed_types'=>'jpg|png',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        $file_element_name='UploadP';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji2=$this->upload->data();
	        $path_=$path_ji2['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
    }
	






	function getprofile()
	{
		
		$this->db->select('st.first_name, st.last_name, st.date_of_birth, st.blood_group, sc.faculty_contact ,sc.faculty_email	');
		$this->db->where('faculty_id','1');
		$this->db->from('faculty_personal st');
		//$this->db->join('std_contact sc' , 'st.student_id = sc.student_id');
		//$this->db->join('std_address sa, sa.student_id=  st.student_id');
	

		$query=$this->db->get();

		//return $query->result();
		echo $this->db->last_query();
	}
}

