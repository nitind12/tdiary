
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
			$Semester_id = $this->input->post('SemesterG');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->order_by('subject_id');
		$query = $this->db->get('subject');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getSubjectc()
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
		function getuploadsubject()
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
		function getclassassign()
		{
			$course_id = $this->input->post('Courseasign');
			$Semester_id = $this->input->post('Semesterasign');
			$Session_id = $this->input->post('Session');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->where('session_id',$Session_id);
		$this->db->order_by('add_class_id');
		$query = $this->db->get('add_class');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getclassC()
		{
			$course_id = $this->input->post('Course');
			$Semester_id = $this->input->post('Semester');
			$Session_id = $this->input->post('Session');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->where('session_id',$Session_id);
		$this->db->order_by('add_class_id');
		$query = $this->db->get('add_class');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getclass1()
		{
		$course_id = $this->input->post('CourseG');
		$Session_id = $this->input->post('SessionG');

		$this->db->where('course_id',$course_id);
		$this->db->where('session_id',$Session_id );
		$this->db->order_by('add_class_id');
		$query = $this->db->get('add_class');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getclassP()
		{
		$course_id = $this->input->post('CourseP');
		$Session_id = $this->input->post('SessionP');

		$this->db->where('course_id',$course_id);
		$this->db->where('session_id',$Session_id );
		$this->db->order_by('add_class_id');
		$query = $this->db->get('add_class');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getclassP1()
		{
		$course_id = $this->input->post('CourseP1');
		$Session_id = $this->input->post('SessionP1');

		$this->db->where('course_id',$course_id);
		$this->db->where('session_id',$Session_id );
		$this->db->order_by('add_class_id');
		$query = $this->db->get('add_class');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getstudent1()
		{
		$course_id = $this->input->post('CourseG');
		$Session_id = $this->input->post('SessionG');
		$this->db->distinct();
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->where('a.course_id',$course_id);
		$this->db->where('a.session_id',$Session_id );
		$this->db->order_by('a.first_name');
		$this->db->where('(a.student_id not in (select b.student_id from section b))');
		$query = $this->db->get('std_personal a');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function getstudentP()
		{
		$course_id = $this->input->post('CourseP');
		$Session_id = $this->input->post('SessionP');
		$this->db->distinct();
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->where('a.course_id',$course_id);
		$this->db->where('a.session_id',$Session_id );
		$this->db->order_by('a.first_name');
		$query = $this->db->get('std_personal a');
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
			$this->db->where('section_id', $this->input->post('sectionji'));
			$query = $this->db->get('add_class');
			//echo $this->db->last_query();die();
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
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.* ,b.course_id, b.semester_id, b.section_id ,c.subject_name');
		$this->db->from('assign_subject a');
		$this->db->where('faculty_id', $this->session->userdata('facultyid'));
		$this->db->join('add_class b', 'a.add_class_id=b.add_class_id');
		$this->db->join('subject c', 'a.subject_id=c.subject_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function fetchClass1()
		{
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*');
		$this->db->from('add_class a');
		$query = $this->db->get();
		return $query->result();
		}

		function fetchSubject()
		{		
		$this->db->select('a.*');
		$this->db->where('faculty_id', $this->session->userdata('facultyid'));
		
		$this->db->from('assign_subject a');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
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
			'session_id' => $this->input->post('Session'),
			'course_id' => $this->input->post('Course'),
			'semester_id' => $this->input->post('Semester'),
			'section_id' => $this->input->post('Section'),
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
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.* ,b.course_id, b.semester_id, b.section_id,c.subject_name');
		$this->db->from('assign_subject a');
		$this->db->where('faculty_id', $this->session->userdata('facultyid'));
		$this->db->where('b.add_class_id', $clsid);
		
		$this->db->join('add_class b', 'a.add_class_id=b.add_class_id');
		$this->db->join('subject c', 'a.subject_id=c.subject_id');
		
		$q = $this->db->get();
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
			$subject_id = $this->input->post('subject');
			
			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'date'=>$date,
			'time'=>'02:00',
			'roll_no' => '121',
			'attendance_status' => $mk1[$i],
			'status' => '1',
			'username' =>$this->session->userdata('user'),
			'faculty_id'=>$this->session->userdata('facultyid'),
			'student_id'=>$stdroll[$i],
			'subject_id'=>$subject_id
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

	function assignsubject_modals()
		{ 
			
			$data=array(
				'subject_id'=> $this->input->post('SubjectNameasign'),
				'faculty_id'=> $this->input->post('Faculty'),
				'session_id'=> $this->input->post('Session'),
				'add_class_id'=> $this->input->post('Classasign'),
				
				'status'=>'1',
				'username'=>$this->session->userdata('user')

			);
			$this->db->insert('assign_subject',$data);
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
		function addsectionstudent()
		{ 
			$std_group= $this->input->post('students');//valueeee
			for($i=0; $i<count($std_group); $i++)
			{
			$data=array(
				'session_id'=> $this->input->post('SessionG'),
				'session_class_id'=> $this->input->post('ClassG'),
				'student_id'=>$std_group[$i],
				'status'=>'1',
				'username'=>$this->session->userdata('user')
			);

			$this->db->insert('section',$data);
		}
	}
		function addpromotedstudent()
		{ 
			$std_group= $this->input->post('stud');//valueeee
			for($i=0; $i<count($std_group); $i++)
			{
			$data=array(
				'session_id'=> $this->input->post('SessionP1'),
				'session_class_id'=> $this->input->post('ClassP1'),
				'student_id'=>$std_group[$i],
				'status'=>'1',
				'username'=>$this->session->userdata('user')
			);
		
			$this->db->insert('section',$data);
		}
		
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



		function getUpload()
		{
			
		$date= $this->input->post('dateup');
		
		$data = array(
			'date_notes'=>$date,
			'faculty_id'=>'ravi',
			'subject_id' =>'BCA101',
			'upload_notes'=> 'x',
			'status'=>1					
			);
			$this->db->insert('upload_notes',$data);
		
			
	$fileid = $this->db->insert_id();
	$path_id = $this->upload_notes($fileid);
	$this->db->where('notes_id', $fileid);
		$data = array(
			'upload_notes'=> $path_id		// here upload notes is a column in database
				);
		$this->db->update('upload_notes', $data);		// here upload notes is a table name in database
	}

	function upload_notes($id)
	{
		clearstatcache();
        $config=array(
	        'upload_path'=>'./assets/upload_notes/',   // upload notes is a folder in assets folder
	        'allowed_types'=>'pdf|xlsx|docx|jpg',
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


    function download_models( )
		{
		
		$this->db->distinct('a.notes_id');
		$this->db->select('a.*');
		$this->db->where('a.subject_id','BCA101');
		$this->db->where('a.faculty_id', 'ravi');
		$this->db->from('upload_notes a');
		$q = $this->db->get();
		return $q->result();
		}



	function del($a)
	{
		$this->db->delete('upload_notes',array('notes_id'=>$a));
		return;
	}
		


	function reports_attendance_modalsC()
		{
			$subject_id=$this->input->post('subject');
			$btn1= $this->input->post('d1');
			$btn1= $this->input->post('d2');
		$this->db->distinct('date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('a.faculty_id',$this->session->userdata('facultyid'));
		$this->db->where('DATE(date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
		
		}
		function reports_attendance_modalsCA()
		{
			$consolidate_= array();	
			$subject_id=$this->input->post('Subject_Name');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('Class');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('');
			$btn1= $this->input->post('d1');
			$btn1= $this->input->post('d2');
		$this->db->distinct('date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('a.course_id',$course_id);
		$this->db->where('a.add_class_id',$add_class_id);
		$this->db->where('a.session_id',$session_id);
		$this->db->where('a.semseter_id',$semseter_id);
		$this->db->where('DATE(date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' faculty_personal b', 'b.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		
}
?>
