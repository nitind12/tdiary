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
        //clearstatcache();
        echo "agaya  ";
        $config=array(
        'upload_path'=>'./assets/'.'ttdocs',
        'allowed_type'=>'pdf',
        'max_size'=>5000,
        'file_name'=>$id,
        'overwrite'=>TRUE,
        );
        $file_element_name='txtttUpload';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
        $path_ji=$this->upload->data();
        $path_=$path_ji['file_name'];
    }else{
        $path_='x';
    }
    return $path_;
    }
	/*function saving()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject')

		);
		
		$this->db->insert('data',$data);

	}*/
	function del($a){
		$this->db->delete('student_time_table',array('Section' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('Studenttimetableeditcontroller',array('id' => $a));
		return;
	}
	/*public function edit($a)
	{
		$d = $this->db->get_where('studentmarks',array('Student_Roll'=>$a))->row();
		return $d;
	}
	function update($id)
	{
		$Student_Roll = $this->input->post('Student_Roll');
		$Student_name = $this->input->post('Student_name');
		$marks1 = $this->input->post('marks1');
		$marks2 = $this->input->post('marks2');
		$data =array(
			'Student_Roll' => $Student_Roll,
			'Student_name'=>$Student_name,
			'marks1'=>$marks1,
			'marks2'=>$marks2
		);
		$this->db->where('Student_Roll',$id);
		$this->db->insert('test',$data);
	}*/
}
?>