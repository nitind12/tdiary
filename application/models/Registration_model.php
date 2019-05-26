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
			
			
			
			'address' => $this->input->post('addressname'),
			'state' => $this->input->post('statename'),
			'city' => $this->input->post('cityname'),
			'pincode' => $this->input->post('pincodename'),
			'address_status' => '1',
			'address_sign' => '1',
			
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid

		);	
		$this->db->insert('std_address',$data);
	
$data = array(
	
			'address' => $this->input->post('addressname1'),
			'state' => $this->input->post('statename1'),
			'city' => $this->input->post('cityname1'),
			'pincode' => $this->input->post('pincodename1'),
			'address_sign' => '2',
			
			'address_status' => '1',
			'username'=>$this->session->userdata('user') ,
			'student_id' => $sid



		);

		
		$this->db->insert('std_address',$data);


$data = array(
	
			'std_email' => $this->input->post('std_email'),
			'std_contact' => $this->input->post('std_contact'),
			'alternate_contact' => $this->input->post('alternate_contact'),
			'alternate_email' => $this->input->post('alternate_email'),
			'status' => '1',
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid



		);

		
		$this->db->insert('std_contact',$data);
	
							 
$data = array(
	
			'qualification_status' => $this->input->post('qualification_status1'),
			'board' => $this->input->post('board1'),
			'passing_year' => $this->input->post('PassingYear1'),
			'school' => $this->input->post('schoolname1'),
			'percentage' => $this->input->post('percentage1'),
			'totalmarks' => $this->input->post('totalmarks1'),
			'obtainedmarks' => $this->input->post('obtained1'),
			'status' => '1',
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid
		);
		$this->db->insert('std_academic',$data);
	
$data = array(
	
			'qualification_status' => $this->input->post('qualification_status2'),
			'board' => $this->input->post('board2'),
			'passing_year' => $this->input->post('PassingYear2'),
			'school' => $this->input->post('schoolname2'),
			'percentage' => $this->input->post('percentage2'),
			'totalmarks' => $this->input->post('totalmarks2'),
			'obtainedmarks' => $this->input->post('obtained2'),
			'status' => '1',
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid
		);
		$this->db->insert('std_academic',$data);

$data = array(
	
			'qualification_status' => $this->input->post('qualification_status3'),
			'board' => $this->input->post('board3'),
			'passing_year' => $this->input->post('PassingYear3'),
			'school' => $this->input->post('schoolname3'),
			'percentage' => $this->input->post('percentage3'),
			'totalmarks' => $this->input->post('totalmarks3'),
			'obtainedmarks' => $this->input->post('obtained3'),
			'status' => '1',
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid
		);
		$this->db->insert('std_academic',$data);
	
$data = array(
	
			'qualification_status' => $this->input->post('qualification_status4'),
			'board' => $this->input->post('board4'),
			'passing_year' => $this->input->post('PassingYear4'),
			'school' => $this->input->post('schoolname4'),
			'percentage' => $this->input->post('percentage4'),
			'totalmarks' => $this->input->post('totalmarks4'),
			'obtainedmarks' => $this->input->post('obtained4'),
			'status' => '1',
			'username'=>$this->session->userdata('user'),
			'student_id' => $sid
	);
			$this->db->insert('std_academic',$data);

	
	
			
		$data = array(
			'student_id' =>$sid, 
			'username'=>$this->session->userdata('user'),
			'status'=>1						
			);
			$this->db->insert('student_photo',$data);
		
			
	$fileid = $this->db->insert_id();
	$path_id = $this->upload_ttStudent($fileid);
	
	$path_id1 = $this->upload_ttStudents($fileid);
	$this->db->where('student_photo_id', $fileid);
		$data = array(
			'student_photo' => $path_id,
			'student_sig' => $path_id1

		);
		
		$this->db->update('student_photo', $data);
	
	}
function upload_ttStudents($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/student_photo/',
	        'allowed_types'=>'jpg|png',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        $file_element_name='Signature';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji=$this->upload->data();
	        $path_=$path_ji['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
    }
	
	function upload_ttStudent($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/student_sig/',
	        'allowed_types'=>'jpg|png',
	        'file_name'=>$id+'p',
        	'overwrite'=>TRUE,
        );
        $file_element_name='UploadP';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji1=$this->upload->data();
	        $path_=$path_ji1['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
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

