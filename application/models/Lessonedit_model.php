<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonedit_model extends CI_Model
{
	function fetchtable($clsid,$subid)
	{  
		$this->db->select('a.*');
		$this->db->where('a.add_class_id', $clsid);
		$this->db->where('a.subject_id', $subid);
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
		$this->db->from('lesson a');
	
		$query = $this->db->get();	
		//echo $this->db->last_query();die();
		return $query->result();
	}

	function lesson_edit_saving_modal()
	{
		$subject_id=$this->input->post('subject_id');
		$addclass_id=$this->input->post('addclass_id');
		$date=$this->input->post('date1');
		$lecture_ty=$this->input->post('lecturetype');
		for($i=0; $i<count($addclass_id); $i++)
		{
			$data = array(
				'add_class_id'=>$addclass_id[$i],
				'start_time' => $this->input->post('txtstart'),
				'end_time' => $this->input->post('txtend'),
				'lesson_id'=>$this->input->post('lesson_no'),	
				//'date' => $date,
				'lecture_type' => $lecture_ty[$i],
				'date'=>$this->input->post('date'),
				'topic' => $this->input->post('Topic'),
				'unit' => $this->input->post('Unit'),
				'subject_id'=>$subject_id,
				'faculty_id'=>$this->session->userdata('facultyid'),
				//'lecture_id' => $this->input->post('Lecture'),
				'status'=>'1',
				'username'=>'ra'
			);
			
			$this->db->insert('lesson',$data);	
		}
	}


//---  double click and edit ---//

	function updatedColumn()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $less_id=$this->input->post('less_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('lesson_id', $less_id);
        $data = array(
        	$col => $dt
        );
        $query = $this->db->update('lesson', $data);
        return $query;
    }
	

/*
	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}
*/
	


	//---- for delete ---//

	function del($a){
		$this->db->delete('lesson',array('lesson_id' => $a));
		return;
	}

/*	public function getLecturetype()
	{
		$this->db->select('lecture_type_id,lecture_name');
		$query = $this->db->get('lecture_type');
		return $query->result();
	}
	*/
}?>
