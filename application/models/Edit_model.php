<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Edit_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("lecture");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'Course_Name' => $this->input->post('Course_Name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Faculty_Name' => $this->input->post('Faculty_Name'),
			'Date_Of_Commencement' => $this->input->post('Date_Of_Commencement'),
			'Actual_Date_Of_Completion' => $this->input->post('Actual_Date_Of_Completion'),
			'Expected_Date_Of_Completion' => $this->input->post('Expected_Date_Of_Completion'),
			'Subject_Name' => $this->input->post('Subject_Name'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'No_Of_Lecture' => $this->input->post('No_Of_Lecture'),
			'Total_No_Of_Lecture' => $this->input->post('Total_No_Of_Lecture')

		);
		
		$this->db->insert('lecture',$data);

	}
}
?>