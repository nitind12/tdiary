<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lectureedit_model extends CI_Model
{

	function fetchtable()
	{      
		$query = $this->db->get("lecture");
		return $query->result();
	}
	function savingdata()
	{
		$data = array(
			'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('course'),
			'semester_id' => $this->input->post('txtsemester'),
            'subject_id' => $this->input->post('txtsubject'),
            'syllabus_pdf' => $this->input->post('syllabus'),
            'lectureid'=>$this->input->post('lectureno'),
			'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
			'faculty_id' => $this->input->post('txtfaculty'),
			'unit' => $this->input->post('txtunit'),
			'topic'=>$this->input->post('topic'),
            'no_of_lecture' => $this->input->post('No_Of_Lecture'),
			'total_lecture' => $this->input->post('txttotal'),
            'status'=>'1',
            'username'=>'ra'
           );
		
		$this->db->insert('lecture',$data);
	}

		function del($a){
		$this->db->delete('lecture',array('lectureid' => $a));
		return;
	}
}?>