<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lview_model extends CI_Model
{
	function fetchtable()
	{
		$query = $this->db->get("lecture");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'Course_Name' => $this->input->post('course'),
			'Semester' => $this->input->post('txtsemester'),
			'Section' => $this->input->post('txtsection'),
			'Date_Of_Commencement' => $this->input->post('txtDOC'),
			'Actual_Date_Of_Completion' => $this->input->post('txtADOC'),
			'Expected_Date_Of_Completion' => $this->input->post('txtEDOC'),
			'Faculty_Name' => $this->input->post('txtfaculty'),
			'Subject_Name' => $this->input->post('txtsubject'),
			'Unit' => $this->input->post('txtunit'),
			'Topic' => $this->input->post('topic'),
			'No_Of_Lecture' => $this->input->post('No_Of_Lecture'),
			'Total_No_Of_Lecture' => $this->input->post('txttotal')

		);
		
		$this->db->insert('lecture',$data);
	}


}
?>