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
			'add_class_id' => $addclass_id[$i],
			'lecture_id'=> $this->input->post('lectureno'),
			//'date_of_commencement' => $this->input->post('txtDOC'),
			//'date_of_completion' => $this->input->post('DOC'),			

            'lecture_id'=>$this->input->post('lectureno'),
			'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
			'session_id' => $this->input->post('session'),
			'course_id' => $this->input->post('course'),
			'semester_id' => $this->input->post('txtsemester'),
            'subject_id' => $this->input->post('txtsubject'),
            'syllabus_pdf' => $this->input->post('syllabus'),
            'lecture_id'=>$this->input->post('lectureno'),
			'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
			'unit' => $this->input->post('txtunit'),
			'topic'=>$this->input->post('topic'),
           // 'no_of_lecture' => $this->input->post('No_Of_Lecture'),
			'total_lecture' => $this->input->post('txttotal'),
			'status'=>'1',
            'username'=>'ra'
           );	
		
			$this->db->insert('lecture',$data);
		}
	
	}

	function updatedColumn()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $lect_id=$this->input->post('lectid');
        echo $col = $this->input->post('columnname');

        $this->db->where('lecture_id', $lect_id);
        $data = array(
        	$col => $dt
        );
        $query = $this->db->update('lecture', $data);
        return $query;
    }
	
	/*function savingdata()
	{
		$addclass_id=$this->input->post('addclass_id');

		for($i=0; $i<count($addclass_id); $i++)
		{
 		$data = array(
			'add_class_id' => $addclass_id[$i],

            'date_of_commencement' => $this->input->post('txtDOC'),
			'date_of_completion' => $this->input->post('DOC'),			
			'no_of_lecture' => $this->input->post('No_Of_Lecture'),
			'total_lecture' => $this->input->post('txttotal'),
			'status'=>'1',
            'username'=>'ra'
           );	
		
			$this->db->insert('',$data);
		}
	}
*/


		function add_view_attendance($sess, $crs)
		{
		$intel = array();
		$this->db->distinct('b.session_id');
		$this->db->select('a.*');
		$this->db->where('a.session_id', $sess);
		$this->db->where('a.course_id', $crs);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
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
}

