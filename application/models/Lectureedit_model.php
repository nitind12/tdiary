<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Lectureedit_model extends CI_Model
{

	function fetchtable($clsid,$subid)
	{  
		
		$this->db->select('a.*');
		$this->db->where('a.add_class_id', $clsid,$subid);
		$this->db->where('subject_id', $subid);
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
	
		$this->db->from('lecture a');
		$query = $this->db->get();
		return $query->result();
	}



	function lecture_saving_data_modal()
	{
		$addclass_id=$this->input->post('addclass_id');
		$subject_id=$this->input->post('subject_id');
		for($i=0; $i<count($addclass_id); $i++)
		{			

			$data = array(
				'add_class_id' => $addclass_id[$i],
				'unit' => $this->input->post('txtunit'),
				'topic'=>$this->input->post('topic'),
				'no_of_lecture'=>$this->input->post('Lecture_no'),
				'subject_id'=>$subject_id,

	            'faculty_id'=>$this->session->userdata('facultyid'),
				'status'=>'1',
	            'username'=>'ra'
          	 );	
			$this->db->insert('lecture',$data);
		}
	
	}
	/*function total_modal()
	{
	
	$this->db->select('SUM(no_of_lecture)');
	$this->db->select('no_of_lecture');
	$this->db->from('lecture');
	$this->db->order_by('unit');
	$this->db->limit(3);
	$q=$this->db->get();
	return $q->row();
	}*/

//----double click and edit---//

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



//--- course name from database ---//
/*	public function getCourse()
	{
		$this->db->select('s_no , course_id');
		$query = $this->db->get('course_table');
		return $query->result();
	}
*/


	//-- for delete --//
	function del($a)
	{
		$this->db->delete('lecture',array('lecture_id'=>$a));
		return;
	}
}?>

