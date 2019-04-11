<?php
class Givenassignmentmodel extends CI_Model{
	

	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get('assignment');
		//echo $this->db->last_query(); die();
		return $q->result();
	}
function add_view_attendance($clsid)
		{
		//$intel = array();
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		}
		
}