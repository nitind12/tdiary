<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Studenttimetableeditmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("student_time_table");
		return $query->result();
	}
	function savingTimeTable()
	{
		$data = array(
			'Course_id' => $this->input->post('Course_id'),
			'Semester' => $this->input->post('Semester'),
			'Session' => $this->input->post('Session'),
			'Section' => $this->input->post('Section'),
		);
		$this->db->insert('student_time_table',$data);
		$fileid = $this->db->insert_id();
		echo $this->upload_tt($fileid); die();
	}

	function upload_tt($id){
        $config=array(
	        'upload_path'=>'./assets/ttdocs/',
	        'allowed_type'=>'*',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        echo $config['upload_path'];
        $file_element_name='txtttUpload';
        $this->load->library('upload',$config);
        echo $this->upload->do_upload($file_element_name); die();
        if($this->upload->do_upload($file_element_name)){
	        $path_ji=$this->upload->data();
	        $path_=$path_ji['file_name'];
	    }else{
	        $path_='x';
	    }
    return $path_;
    }
	/*
	function saving()
	{

	}
	*/
	function del($a){
		$this->db->delete('student_time_table',array('Section' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('Studenttimetableeditcontroller',array('id' => $a));
		return;
	}
	
}
?>