<?php
class Add_class_model extends CI_Model
{
		function fetchClass()
		{
		$query = $this->db->get("add_class");
		return $query->result();
		}
		function savingdata()
		{
		$data = array(
			'faculty_id'=>'ravi',
			'session_id' => $this->input->post('Session'),
			'course_id' => $this->input->post('Course'),
			'semester_id' => $this->input->post('Semester'),
			'section_id' => $this->input->post('Section'),
			'subject_id' => $this->input->post('Subject_Name'),
			'username' => 'ra',
			'status'=>1						

			);
			$this->db->insert('add_class',$data);

		}
		function delClass($no_)
		{	
			$this->db->where('s_no', $no_);
			$query = $this->db->delete("add_class");
			return $query;
		}
	
		function add_attendance()
		{
		$intel = array();
		$this->db->distinct('b.session_id');
		$this->db->select('a.*, b.first_name ,b.student_id');
		$this->db->from('add_class a');
		$this->db->join('std_personal b', 'b.session_id=a.session_id');

		$q = $this->db->get('add_class');
		//echo $this->db->last_query();
		return $q->result();
		}
		public function take_attendance()
		{
			$mk1 = $this->input->post('optionsRadios');
			$stdroll = $this->input->post('Student_Roll');
		
			for($i=0; $i<count($mk1); $i++)
			{
			$data = array(
			'date'=>'21/05/2019',
			'time'=>'02:00',
			'roll_no' => $stdroll[$i],
			'attendance_status' => $mk1[$i],
			'status' => '1',
			'username' =>'ra',
			'faculty_id'=>'2',
			'student_id'=>'121'
			);
		
			$this->db->insert('attendance',$data);
			}	
		}
	}