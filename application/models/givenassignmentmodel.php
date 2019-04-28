<?php
class Givenassignmentmodel extends CI_Model{


	function fetchtable($no_)

	{
		$this->db->order_by('Assignment_no','desc');
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$q = $this->db->get('assignment');
		return $q->result();
	}
	

	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$q = $this->db->get('assignment');
		return $q->result();
	}
	public function add_view_class($clsid)
		{
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('add_class a');
		$q = $this->db->get();
		return $q->result();
		}
		
	public function assignment_edit_modal_saving()
	{
		$addclass_id= $this->input->post('addclass_id');	
			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(	
			'add_class_id' => $addclass_id[$i],	
			'Assignment_no' => $this->input->post('Assignment_no'),
			'Given_date' => $this->input->post('Given_date'),
			'Submission_date' => $this->input->post('Submission_date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'status' => '1',
			'username' =>'ra'
		);
			$this->db->insert('assignment',$data);
		}
	}


	

	function del1($a){
		$this->db->delete('assignment',array('Assignment_id' => $a));
		return;
	}
	
	

	//---double click and edit---//

	function updatedColumn()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $givenassign_id=$this->input->post('givenassign_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('Assignment_id', $givenassign_id);
        $data = array(
        			$col => $dt
       			 );

        $query = $this->db->update('assignment', $data);
        return $query;
    }
}