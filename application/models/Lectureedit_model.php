<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lectureedit_model extends CI_Model
{

	function fetchtable($clsid)
	{  
		 $this->db->select('a.*');
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('lecture a');
		$query = $this->db->get();
		return $query->result();
	}
	function lecture_saving_data_modal()
	{
		$addclass_id=$this->input->post('addclass_id');

		for($i=0; $i<count($addclass_id); $i++)
		{			
	$data = array(
			'add_class_id' => $addclass_id[$i],
			'unit' => $this->input->post('txtunit'),
			'topic'=>$this->input->post('topic'),
            'no_of_lecture' => $this->input->post('txtunit'),
            'faculty_id'=>'121',
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
	
	function add_view_class($clsid)
		{
		//$intel = array();
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		}
	/*	public function add_view_class($sess,$crs)
		{
			$this->db->distinct('b.session_id');
			$this->db->select('a.*');
			$this->db->where('a.session_id', $sess);
			$this->db->where('a.course_id', $crs);
			$this->db->from('add_class a');
			$q = $this->db->get();
			return $q->result();
		}*/
		public function getCourse()
		{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
		}

}

