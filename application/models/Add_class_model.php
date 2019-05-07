<?php
class Add_class_model extends CI_Model
{
	
	function getDashboardMenu()
		{
		$this->db->select('a.*');
		$this->db->from('sidebar a');
		$this->db->join('users_menu b', 'a.sidebar_id=b.sidebar_id');
		$this->db->where('b.users_id', $this->session->userdata('user_status'));
		$this->db->where('a.status', 2);
		$q = $this->db->get();
		//echo $this->db->last_query();

		return $q->result();
		
		}
		function getlastMenu()
		{
			$this->db->select('a.*');
		$this->db->from('sidebar a');
		$this->db->join('users_menu b', 'a.sidebar_id=b.sidebar_id');
		$this->db->where('b.users_id', $this->session->userdata('user_status'));
		$this->db->where('a.status', 3);
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		
		}
		
		 function getAssignment1()
		{
		$this->db->distinct('Assignment_no');	
		$this->db->select('Assignment_no');
		$query = $this->db->get('assignment');
		return $query->result();
		}

		function getCourse1()
		{
		$this->db->select('course_id,name_of_courses');
		$query = $this->db->get('course_table');
		return $query->result();
		}
		function getboard()
		{
		$this->db->select('board_id,board_name');
		$query = $this->db->get('board');
		return $query->result();
		}

	 function getSession1()
		{
		$this->db->select('s_id,session');
		$query = $this->db->get('session');
		return $query->result();
		}
		function getSemester1()
		{
		$this->db->select('semester_id,no_of_semester');
		$query = $this->db->get('semester');
		return $query->result();
		}
		function getfaculty(){
		
		$this->db->select('faculty_id,first_name,last_name');
		$query = $this->db->get('faculty_personal');
		return $query->result();
		}
		function getSubject1()
		{
			$course_id = $this->input->post('Course');
			$Semester_id = $this->input->post('Semester');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->order_by('subject_id');
		$query = $this->db->get('subject');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getSubjectasign()
		{
			$course_id = $this->input->post('Courseasign');
			$Semester_id = $this->input->post('Semesterasign');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->order_by('subject_id');
		$query = $this->db->get('subject');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		
		function getMenu()
		{
		$this->db->select('a.*');
		$this->db->from('sidebar a');
		$this->db->join('users_menu b', 'a.sidebar_id=b.sidebar_id');
		$this->db->where('b.users_id', $this->session->userdata('user_status'));
		$this->db->where('a.status', 1);
		$q = $this->db->get();
		//echo $this->db->last_query();

		return $q->result();
		}
		
		function getSubmenu(){
			$query = $this->db->get('sub_sidebar');
			return $query->result();
		}
		function specificClass(){
			$this->db->select('add_class_id');
			$this->db->where('session_id', $this->input->post('sessionji'));
			$this->db->where('course_id', $this->input->post('crs_for_attendance'));
			$this->db->where('semester_id', $this->input->post('semji'));
			$this->db->where('subject_id', $this->input->post('subjectji'));
			$this->db->where('section_id', $this->input->post('sectionji'));
			$query = $this->db->get('add_class');
			//echo $this->db->last_query();
			return $query->row();
		}
		function getformtypeMenu()
		{
		$this->db->order_by('form_type_id');
		$query = $this->db->get("form_type");
		return $query->result();
		}
		
		function fetchClass()
		{
		$this->db->order_by('course_id');
		$query = $this->db->get("add_class");
		return $query->result();
		}
		function fetchSubject()
		{
		$this->db->order_by('subject_id');

		$query = $this->db->get("add_class");
		return $query->result();
		}

		function fetchSession(){
			$this->db->order_by('s_id');
			$query = $this->db->get('session');
			return $query->result();
		}

		function fetchCourses()
		{
			$this->db->distinct();
			$this->db->order_by('a.course_id');
			$this->db->select('a.course_id');
			$this->db->from("course_table a");
			$this->db->join('add_class b', 'a.course_id=b.course_id');
			$query = $this->db->get();
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
			'section_id' => $this->input->post('Section'),
			'date_of_commencement' => $this->input->post('DateOfCommencement'),
			'date_of_completion' => $this->input->post('DateOfCompletion'),
			'username' => $this->session->userdata('user'),
			'status'=>1,						
			'syllabus_pdf'=>'x'
			);
			$this->db->insert('add_class',$data);
		
			
	$fileid = $this->db->insert_id();
	$path_id = $this->upload_tt1($fileid);
	$this->db->where('add_class_id', $fileid);
		$data = array(
			'syllabus_pdf' => $path_id
		);
		$this->db->update('add_class', $data);
	}

	function upload_tt1($id){
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/ttdocs/',
	        'allowed_types'=>'pdf|xlsx',
	        'file_name'=>$id,
        	'overwrite'=>TRUE,
        );
        $file_element_name='pic_file';
        $this->load->library('upload',$config);
        if($this->upload->do_upload($file_element_name)){
	        $path_ji=$this->upload->data();
	        $path_=$path_ji['file_name'];
	    }else{
	        $path_='x';
	    }

    return $path_;
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
		
		
		function  reports_attendance_modals($no_='')
		{
			$reports_=array();
			$btn1= $this->input->post('d1');
	
		//$this->db->distinct('a.roll_no');
		$this->db->select('a.*');
		$this->db->where('DATE_FORMAT(a.date, "%Y-%m-%d")=',date('Y-m-d',strtotime($btn1)));
		if($no_ != ''){
			$this->db->where('a.add_class_id', $no_);
		}
		$this->db->from('attendance a');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
		
		}
		function reports_modals( $clsid)
		{
		$btn1= $this->input->post('d1');
	
		$intel = array();
		$this->db->distinct('a.roll_no');
		$this->db->select('a.*,b.first_name');
		$this->db->where('a.date',$btn1);
		$this->db->where('a.add_class_id', $clsid);
		$this->db->from('attendance a');
		$this->db->join('std_personal b', 'b.student_id=a.roll_no');
		$q = $this->db->get();
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
			'username' =>$this->session->userdata('user'),
			'faculty_id'=>'2',
			'student_id'=>'121'
			);
		
			$this->db->insert('attendance',$data);
			}	
		}



		function addSession()
		{ 
			
			$data=array(
				's_id'=> $this->input->post('inputsession_id'),
				'session'=> $this->input->post('inputsession_name'),
				'status'=>'1',
				'username'=>$this->session->userdata('user')

			);
			$this->db->insert('session',$data);
		}


		function addBatch()
		{ 
			
			$data=array(
				'batch_id'=> $this->input->post('inputbatch_id'),
				'batch_name'=> $this->input->post('inputbatch_name'),
				'status'=>'1',
				'username'=>$this->session->userdata('user')

			);
			$this->db->insert('batch',$data);
		}


		function addAdmin_pwd()
		{ 
			
			$data=array(
				'admin_name'=> $this->input->post('inputadmin_name'),
				'admin_password'=> $this->input->post('inputadmin_pwd'),
				'status'=>'1',
				'username'=>$this->session->userdata('user')

			);
			$this->db->insert('admin',$data);
		}
	


		function add_course()
		{
			$University = $this->input->post('University');
			$Course_ID = $this->input->post('Course_ID');
			$Course_Name= $this->input->post('Course_Name');
			$Course_Duration= $this->input->post('Course_Duration');
			
			$data = array(
			'university_id'=>$University,
			'course_id'=>$Course_ID,
			'name_of_courses'=>$Course_Name,
			'no_of_years' => $Course_Duration,
			'status' => '1',
			'username' =>$this->session->userdata('user'),
			);
		
			$this->db->insert('course_table',$data);
		}
	}
?>
