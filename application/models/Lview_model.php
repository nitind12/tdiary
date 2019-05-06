<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lview_model extends CI_Model
{
    function savingdata3()
    {
     //   $lecture_ = array();

       
     //   $Course= $this->input->post('course');
     //   $Semester=$this->input->post('txtsemester');
     //   $Subject=$this->input->post('txtsubject');
     //   $Faculty=$this->input->post('txtfaculty');

      //  $this->db->distinct('b.lectureid'); 
      // $this->db->select('a.*, b.session');

     //   $this->db->where('course_id',$Course);
     //   $this->db->where('semester_id',$Semester);
     //   $this->db->where('subject_id',$Subject);
    //    $this->db->where('faculty_id',$Faculty);

       // $this->db->from('lecture a');
       //$this->db->join('session b','b.s_id=a.session_id');

     //   $q=$this->db->get('lecture');
        //echo $this->db->last_query();
     //   return $q->result();

    }















































	/*function fetchtable()
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



      public function filled_correctly()
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