<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Newedit_model extends CI_Model
{

	function fetchtable()
	{      
		$query = $this->db->get("lecture");
		return $query->result();
	}


function savingdata()
	{
		$data = array(
			'unit' => $this->input->post('txtunit'),
			'topic'=>$this->input->post('topic'),
            'no_of_lecture' => $this->input->post('No_Of_Lecture'),
			'total_lecture' => $this->input->post('txttotal'),
            'status'=>'1',
            'username'=>'ra'
           );
		
		$this->db->insert('lecture',$data);
	}

		function del($a)
		{
		$this->db->delete('lecture',array('lecture_id' => $a));
		return;
		}
}?>