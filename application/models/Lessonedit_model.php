<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lessonedit_model extends CI_Model
{
	function fetchtable($clsid)
	{  
		 $this->db->select('a.*');
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('lesson a');
		$query = $this->db->get("");	
		return $query->result();
	}
	function lesson_edit_saving_modal()
	{
			$addclass_id=$this->input->post('addclass_id');
			$date=$this->input->post('date1');

		for($i=0; $i<count($addclass_id); $i++)
		{
		$data = array(
			'add_class_id'=>$addclass_id[$i],
			'start_time' => $this->input->post('txtstart'),
			'end_time' => $this->input->post('txtend'),
			'lesson_id'=>$this->input->post('lesson_no'),	
			'date' => $date,
			'topic' => $this->input->post('Topic'),
			'unit' => $this->input->post('Unit'),
			'lecture_id' => $this->input->post('Lecture'),
			'status'=>'1',
			'username'=>'ra'
		
		);
		
		$this->db->insert('lesson',$data);	

	}
}
	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}

	function del($a){
		$this->db->delete('lesson',array('lesson_id' => $a));
		return;
	}
}?>
