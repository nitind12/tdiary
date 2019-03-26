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
			'Course_Name' => $this->input->post('course'),		
			'Semester' => $this->input->post('txtsemester'),
			'Section' => $this->input->post('txtsection'),
			'Time_Duration' => $this->input->post('txttime'),
			'Start_Time' => $this->input->post('txtstart'),
			'End_Time' => $this->input->post('txtend'),
			'Date' => $this->input->post('Date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'No_Of_Lecture' => $this->input->post('Lecture'),
		);
		
		$this->db->insert('lesson',$data);		//lesson is a table name of lecture database

	}

	  public function filled_correctly()
	  {  
  
        $Course_ = $this->input->post('course');
        $Semester_ = $this->input->post('txtsemester');
        $Section_ =$this->input->post('txtsection');
        $Time_Duration_=$this->input->post('txttime');
       	$Start_Time_ =$this->input->post('txtstart');
        $End_Time_ =$this->input->post('txtend');
        $Date_ =$this->input->post('Date');
        $Unit_ =$this->input->post('Unit');
        $Topic_ =$this->input->post('Topic');
        $Lecture_ =$this->input->post('Lecture');
 
 

        $this->db->where('course', $course_);  
        $this->db->where('txtsemester', $Semester_); 
        $this->db->where('txtsection',$Section_);
        $this->db->where('txttime', $Time_Duration_);  
        $this->db->where('txtstart', $Start_Time_); 
        $this->db->where('txtend',$End_Time_);
        $this->db->where('Date',$Date_);
        $this->db->where('Unit', $Unit_);  
        $this->db->where('Topic', $Topic_); 
        $this->db->where('Lecture',$Lecture_);
  
 
        $query = $this->db->get('lesson');  
  	 }  

}
?>