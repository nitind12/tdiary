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
		$addclass_id=$this->input->post('addclass_id');

		for($i=0; $i<count($addclass_id); $i++)
		{
		$data = array(
<<<<<<< HEAD
			's_no' => $addclass_id[$i],

            'lecture_id'=>$this->input->post('lectureno'),
			'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
=======
			'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('course'),
			'semester_id' => $this->input->post('txtsemester'),
            'subject_id' => $this->input->post('txtsubject'),
            'syllabus_pdf' => $this->input->post('syllabus'),
            'lecture_id'=>$this->input->post('lectureno'),
			'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
			'faculty_id' => $this->input->post('txtfaculty'),
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary
			'unit' => $this->input->post('txtunit'),
			'topic'=>$this->input->post('topic'),
            'no_of_lecture' => $this->input->post('No_Of_Lecture'),
			'total_lecture' => $this->input->post('txttotal'),
			'status'=>'1',
            'username'=>'ra'
           );	
		
			$this->db->insert('lecture',$data);
		}
	}





	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}
	

		function del($a)
		{
		$this->db->delete('lecture',array('lecture_id' => $a));
		return;
		}
}?>