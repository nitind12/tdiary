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
			'Syllabus_Upload'=>$this->input->post('syllabus'),
			'Unit' => $this->input->post('txtunit'),
			'Topic' => $this->input->post('topic'),
			'No_Of_Lecture' => $this->input->post('No_Of_Lecture'),
			'Total_No_Of_Lecture' => $this->input->post('txttotal')

		);
		
		$this->db->insert('lecture',$data);
	}

/*	  public function filled_correctly()
	  {  
  
        $Course_ = $this->input->post('course');
        $Semester_ = $this->input->post('txtsemester');
        $Section_ =$this->input->post('txtsection');
        $DOC_ =$this->input->post('txtDOC');
        $ADOC_=$this->input->post('txtADOC');
        $EDOC_=$this->input->post('txtEDOC');
        $faculty_=$this->input->post('txtfaculty');
        $subject_=$this->input->post('txtsubject');
        $syllabus_=$this->input->post('syllabus');
        $unit_=$this->input->post('txtunit');
        $topic_=$this->input->post('topic');
        $No_Of_Lecture_=$this->input->post('No_Of_Lecture');
        $total_=$this->input->post('txttotal');




        $this->db->where('course', $course_);  
        $this->db->where('txtsemester', $Semester_); 
        $this->db->where('txtsection',$Section_);
        $this->db->where('txtDOC',$DOC_);
        $this->db->where('txtADOC',$ADOC_);
        $this->db->where('txtEDOC',$EDOC_);
        $this->db->where('txtfaculty',$faculty_);
        $this->db->where('txtsubject',$subject_);
        $this->db->where('syllabus',$syllabus_);
        $this->db->where('txtunit',$unit_);
        $this->db->where('topic',$topic_);
        $this->db->where('No_Of_Lecture',$No_Of_Lecture_);
        $this->db->where('txttotal',$total_);


        $query = $this->db->get('lecture');  
  	 }  
*/
}
?>