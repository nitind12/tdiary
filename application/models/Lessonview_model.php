<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonview_model extends CI_Model
{

/*	function savingdata2()
	{
		$lesson_ = array();

		$Course=$this->input->post('txtcourse');
		$Semester= $this->input->post('txtsemester');
		$Section=$this->input->post('txtsection');
		$Subject=$this->input->post('txtsubject');
    

		//$this->db->distinct('b.lectureid');	
	//	$this->db->select('a.*, b.faculty_id');

		$this->db->where('course_id',$Course);
		$this->db->where('semester_id',$Semester);
		$this->db->where('section_id',$Section);
		$this->db->where('subject_id',$Subject);

		//$this->db->from('lesson a');
	//	$this->db->join('lecture b','b.lectureid=a.faculty_id');

		$q=$this->db->get('lesson');
		//echo $this->db->last_query();
		return $q->result();

	}
/*
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
*/
}
?>