<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Weeklyedit_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("weekly");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			
			'course_id' => $this->input->post('txtcourse'),
			'semester_id' => $this->input->post('txtsemester'),
            'subject_id' => $this->input->post('txtsubject'),
            'section'=>$this->input->post('txtsection'),
            'week_id'=>$this->input->post('week'),
            'start_date'=>$this->input->post('startdate'),
            'end_date'=>$this->input->post('enddate'),
			'no_of_lecture_schedule' => $this->input->post('Lecture_schedule'),
			'no_of_lost_due_to_holiday' => $this->input->post('due_to_holiday'),
			'no_of_lost_due_to_cl' => $this->input->post('due_to_cl'),
			'no_extra_taken' => $this->input->post('extra_taken'),
			'no_of_lecture_actual_taken' => $this->input->post('actual_taken'),
			'description_of_topic' => $this->input->post('topic')
		);
		
		$this->db->insert('weekly',$data);
		}

	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}

	
	function del($a)
	{
		$this->db->delete('weekly',array('week_id' => $a));
		return;
	}
}
?>