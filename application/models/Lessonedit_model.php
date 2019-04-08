<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonedit_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("lesson");		
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			//'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('txtcourse'),		
			'semester_id' => $this->input->post('txtsemester'),
			'section_id' => $this->input->post('txtsection'),
			'subject_id' => $this->input->post('txtsubject'),
			'start_time' => $this->input->post('txtstart'),
			'end_time' => $this->input->post('txtend'),
			'lesson_id'=>$this->input->post('lesson_no'),	
			'date' => $this->input->post('Date'),
			'topic' => $this->input->post('Topic'),
			'unit' => $this->input->post('Unit'),
			'lectureid' => $this->input->post('Lecture'),
			'status'=>'1',
			'username'=>'ra'
		
		);
		
		$this->db->insert('lesson',$data);	

	}

	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}

	function del($a){
		$this->db->delete('lesson',array('lesson_id' => $a));
		return;
	}
}?>
