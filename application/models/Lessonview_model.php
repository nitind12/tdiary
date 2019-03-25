<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonview_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("lesson");		//lesson is table name of lecture database
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'Course_Name' => $this->input->post('Course'),		
			'Semester' => $this->input->post('txtSemester'),
			'Section' => $this->input->post('txtSection'),
			'Time_Duration' => $this->input->post('txttime'),
			'Start_Time' => $this->input->post('txtstart'),
			'End_Time' => $this->input->post('txtend'),
			'Date' => $this->input->post('Date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'No_Of_Lecture' => $this->input->post('Lecture'),
		);
		
		$this->db->insert('lesson',$data);		//lesson is table name of lecture database

	}
}
?>