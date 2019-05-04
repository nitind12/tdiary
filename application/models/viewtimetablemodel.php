<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Viewtimetablemodel extends CI_Model{
	
	/*public function getData()
	{
		
		$this->load->database();
		$q = $this->db->query("SELECT * FROM time_table_edit");
		return $q->result_array();
		
		
	}*/function dashtimetable()
	{
	$intel = array();
	$this->db->select('a.*');
	$this->db->where('a.Faculty_id','1');
	$this->db->from('time_table_edit a');
	$q = $this->db->get();
	return $q->result();
	
}
	function timetable()
	{
		$intel = array();
		$Day = $this->input->post('day');
		
		
		$this->db->distinct('a.Day');
		$this->db->select('a.*');
		$this->db->where('a.Day',$Day);
		
		$this->db->from('time_table_edit a');
		

		$q = $this->db->get('time_table_edit');
		return $q->result();
		//'status' =>'1';
		//'username' ->$this->session->userdata('user');
		//echo  $this->db->last_query();
	}
	
}?>