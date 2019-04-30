<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Weeklyview_model extends CI_Model
{

	function savingdata()
	{
		//$weekly_ = array();

		//$Course=$this->input->post('txtcourse');
		//$Semester= $this->input->post('txtsemester');
		//$Subject=$this->input->post('txtsubject');
		//$Section=$this->input->post('txtsection');
		//$Week=$this->input->post('week');
		//$Startdate=$this->input->post('startdate');
		//$Enddate=$this->input->post('enddate');

		
			//$this->db->distinct('w.weekly_id');
			//$this->db->select('w.*,l.topic,l.date,l.unit,l.no_of_lecture');


		//$this->db->where('w.course_id',$Course);
		//$this->db->where('w.semester_id',$Semester);
		//$this->db->where('w.subject_id',$Subject);
		//$this->db->where('w.section',$Section);
		//$this->db->where('l.date>=',$Startdate);
		//$this->db->where('l.date<=',$Enddate);

		//$this->db->where("DATE_FORMAT('w.start_date','%Y-%m-%d')>=date('Y-m-d',strtotime('".$Startdate."'))");
		//$this->db->where('l.date BETWEEN " '.date('Y-m-d' ,strtotime('2019-04-02')).' " and " '. date('Y-m-d' ,strtotime('2019-04-04.')).'" ');
			//$this->db->where('l.date BETWEEN "'. date('Y-m-d', strtotime('01/04/2019')). '" and "'. date('Y-m-d', strtotime('04/04/2019')).'"');
		//$this->db->where('l.date', BETWEEN '$Startdate' and  '$Enddate');

			//$this->db->from('weekly w');
			//$this->db->join('lesson l','l.lesson_id=w.lesson_id');



			//$q=$this->db->get('weekly');
		// echo $this->db->last_query(); 

			//return $q->result();
	}
}?>