<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Weeklyview_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("weekly");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('course'),
			'semester_id' => $this->input->post('txtsemester'),
            'subject_id' => $this->input->post('txtsubject'),
            'start_date' => $this->input->post('startdate'),
			'end_date' => $this->input->post('enddate'),
			'no_of_lecture_schedule' => $this->input->post('Lecture_schedule'),
			'no_of_lost_due_to_holiday' => $this->input->post('due_to_holiday'),
			'no_of_lost_due_to_cl' => $this->input->post('due_to_cl'),
			'no_extra_taken' => $this->input->post('extra_taken'),
			'no_of_lecture_actual_taken' => $this->input->post('actual_taken'),
			'description_of_topic' => $this->input->post('topic')
		);
		
		$this->db->insert('weekly',$data);
	}
}
?>