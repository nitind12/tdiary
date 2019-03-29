<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonedit_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("lesson");		//lesson is table name of lecture database
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('course'),		
			'semester_id' => $this->input->post('txtsemester'),
			'section_id' => $this->input->post('txtsection'),
			'subject_id' => $this->input->post('txtsubject'),
			'start_time' => $this->input->post('txtstart'),
			'end_time' => $this->input->post('txtend'),
			'date' => $this->input->post('Date'),
			'topic' => $this->input->post('Topic'),
			'unit' => $this->input->post('Unit'),
			'no_of_lecture' => $this->input->post('Lecture'),
			'status'=>'1',
			'username'=>'ra'
		
		);
		
		$this->db->insert('lesson',$data);		//lesson is a table name of lecture database

	}
}?>
