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
			$this->db->where('add_class_id', $no_);
			$query = $this->db->delete("add_class");
			return $query;
		}
	
		function add_attendance($sess, $clsid)
		{
		$intel = array();
		$this->db->distinct('b.session_id');
		$this->db->select('a.*, b.student_id, b.first_name');
		$this->db->where('a.session_id', $sess);
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('std_personal b');
		$this->db->join('section c', 'b.student_id=c.student_id');
		$this->db->join('add_class a', 'a.add_class_id=c.session_class_id');
		$q = $this->db->get();
		//echo $this->db->last_query();
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
		
		public function take_attendance()
		{
			$mk1 = $this->input->post('optionsRadios');
			$stdroll = $this->input->post('Student_Roll');
			$date= $this->input->post('date');
			$addclass_id = $this->input->post('addclass_id');
			
			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'date'=>$date,
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