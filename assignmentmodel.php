<?php
class Assignmentmodel extends CI_Model{
	public function fetchtable()
	{
		$query = $this->db->get("assignment");
		return $query->result();
	}
	
	public function add_view_attendance($clsid)
		{
		//$intel = array();
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		}
		



	public	function assignment_saveing()
		{
		$addclass_id= $this->input->post('addclass_id');
		for($i=0; $i<count($addclass_id); $i++)
		{		
		$data = array(
			'add_class_id' => $addclass_id[$i],
			'Assignment_id' => $this->input->post('Assignment_id'),
			'Given_date' => $this->input->post('Given_date'),
			'Submission_date' => $this->input->post('Submission_date'),
			'Last_submission_date' => $this->input->post('Last_submission_date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'status' => '1',
			'username' =>'ra'
			);
			$this->db->insert('assignment',$data);
		}
	}
	
}
?>
