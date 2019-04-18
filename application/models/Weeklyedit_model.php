<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Weeklyedit_model extends CI_Model
{
	
		

	function fetchtable($clsid)
	{  

		//$query = $this->db->get("weekly");
		//return $query->result();

		$this->db->select('a.*');
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('weekly a');
		$query = $this->db->get();
		return $query->result();
	}
	

	function savingdata()
	{
		$addclass_id=$this->input->post('addclass_id');

		for($i=0; $i<count($addclass_id); $i++)
		{			
		$data = array(
			'add_class_id' => $addclass_id[$i],

            'start_date'=>$this->input->post('startdate'),
            'end_date'=>$this->input->post('enddate'),
			'no_of_lecture_schedule' => $this->input->post('Lecture_schedule'),
			'no_of_lost_due_to_holiday' => $this->input->post('due_to_holiday'),
			'no_of_lost_due_to_cl' => $this->input->post('due_to_cl'),
			'no_extra_taken' => $this->input->post('extra_taken'),
			'no_of_lecture_actual_taken' => $this->input->post('actual_taken'),
				);
		
		$this->db->insert('weekly',$data);
		}
	}


	function add_view_class($clsid)
		{
		//$intel = array();
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		}


	function detailsreports($sd,$ed,$no_)
	{
	$this->db->select('date , unit,topic');
	$this->db->where('DATE(date) BETWEEN "'.$sd.'" AND "'.$ed.'"', '',false);
	 $this->db->where('add_class_id',$no_);
	
	//$this->db->where(' date >= date("'.$sd.'")');
	//$this->db->where( 'date <= date("'.$ed.'")');
	//$this->db->where('a.date ',$sd);
	//$this->db->where('a.date ',$ed);
	$this->db->from('lesson');
		
	$query= $this->db->get();
	return $query->result();
	}

/*function detailsreports($sd,$ed)
	{
	$this->db->select('date, unit,topic');
	$query=$this->db->get('lesson');
	return $query->result();
	}
*/

	function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}

	
	function del($a)
	{
		$this->db->delete('weekly',array('week_id' => $a));
		return;
	}
}
?>