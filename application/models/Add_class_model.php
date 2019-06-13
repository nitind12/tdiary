
<?php
class Add_class_model extends CI_Model
{

	function getallstudent()
		{
			
		$this->db->distinct('a.student_id');
		$this->db->select('a.*');
		$this->db->from('std_personal a');
		$query = $this->db->get('');
		return $query->result();
		}

	function getallstudentno()
		{
			
		$this->db->distinct('a.student_id');
		$this->db->select('a.*');
		$this->db->from('std_personal a');
		$query = $this->db->get('');
		return $query->num_rows();
		}
	
	public function gettotalstd_details($std)
	{
		$this->db->distinct('a.student_id');
		
		$this->db->select('a.*,c.std_email , c.std_contact, c.std_email, c.alternate_contact, c.alternate_email,d.student_photo,d.student_sig ,f.address,f.state, f.city,f.pincode');
	
		$this->db->where('a.student_id',$std);
		$this->db->from('std_personal a');
		
		$this->db->join('std_contact c', 'c.student_id=a.student_id');
		$this->db->join('student_photo d', 'd.student_id=a.student_id');
		$this->db->join('std_address e', 'e.student_id=a.student_id');
		$this->db->join('std_address f', 'f.student_id=a.student_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();	
		return $query->result();		
	}


	function getallfaculty()
		{			
		$this->db->distinct('a.faculty_id');
		$this->db->select('a.*');
		$this->db->from('faculty_personal a');
		$query = $this->db->get('');
		return $query->result();
		}

	function getall_facultyno()
		{
		$this->db->distinct('a.faculty_id');
		$this->db->select('a.*');
		$this->db->from('faculty_personal a');
		$query = $this->db->get('');
		return $query->num_rows();
		}
	
	public function gettotal_facuty_details($faculty)
	{
		$this->db->distinct('a.faculty_id');
		
		$this->db->select('a.*,c.*,d.faculty_photo,d.faculty_sig, f.address, f.state, f.city ,f.pincode');
	
		$this->db->where('a.faculty_id',$faculty);
		$this->db->from('faculty_personal a');
		
		
		$this->db->join('faculty_contact c', 'c.faculty_id=a.faculty_id');
		$this->db->join('faculty_profile d', 'd.faculty_id=a.faculty_id');
		$this->db->join('faculty_address e', 'e.faculty_id=a.faculty_id');
		$this->db->join('faculty_address f', 'f.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
	
		return $query->result();
			
		
	}
	


	function getall_course()
		{
			
		$this->db->distinct('a.course_id');
		$this->db->select('a.*');
		$this->db->from('course_table a');
		$query = $this->db->get('');
		return $query->result();
		}



	function getall_courseno()
		{
			
		$this->db->distinct('a.course_id');
		$this->db->select('a.*');
		$this->db->from('course_table a');
		$query = $this->db->get('');
		return $query->num_rows();
		}



	public function gettotal_course_details($course)
	{
		$this->db->distinct('a.course_id');
		
		$this->db->select('a.*, a.name_of_courses, a.no_of_years,a.university_id');
	
		$this->db->where('a.course_id',$course);
		$this->db->from('course_table a');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
	
		return $query->result();
			
		
	}

	
	function getall_subject()
		{
			
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*');
		$this->db->from('subject a');
		$query = $this->db->get('');
		return $query->result();
		}

	function getall_subjectno()
		{
			
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*');
		$this->db->from('subject a');
		$query = $this->db->get('');
		return $query->num_rows();
		}
function getall_subjectno22()
		{
			
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*,b.subject_name');
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
	
		$this->db->from('assign_subject a');
		$this->db->join('subject b', 'a.subject_id=b.subject_id');
		
		$query = $this->db->get('');
		return $query->num_rows();
		}
function getall_subjectno2211()
		{
			
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*,b.subject_name,c.course_id,c.semester_id');
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
	
		$this->db->from('assign_subject a');
		$this->db->join('subject b', 'a.subject_id=b.subject_id');
		$this->db->join('add_class c', 'a.add_class_id=c.add_class_id');
		
		$query = $this->db->get('');
		return $query->result();
		}

function getall_view_edit_classno22()
		{
			
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*');
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
	
		$this->db->from('assign_subject a');
		
		$query = $this->db->get('');
		return $query->num_rows();
		}


	function getall_view_edit_classno()
		{
			
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*');
		$this->db->from('add_class a');
		$query = $this->db->get('');
		return $query->num_rows();
		}



	function getAssiG()
		{
			
		$this->db->distinct('Assignment_no');
		$this->db->select('a.*');
		$this->db->from('assignment a');
		$query = $this->db->get('');
		return $query->result();
		}
		
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
		function getSubjectc23()
		{
			$course_id = $this->input->post('Course_admin');
			$Semester_id = $this->input->post('Semester_admin');

		$this->db->where('course_id',$course_id);
		$this->db->where('semester_id',$Semester_id);
		$this->db->order_by('subject_id');
		$query = $this->db->get('subject');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		
		function getstudentsubj()
		{
			
		$this->db->where('course_id',$this->session->userdata('cos'));
		$this->db->where('semester_id',$this->session->userdata('tan'));
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
		function getclassC23()
		{
			$course_id = $this->input->post('Course_admin');
			$Semester_id = $this->input->post('Semester_admin');
			$Session_id = $this->input->post('Session_admin');

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
			$time = $this->input->post('time');
						
			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'date'=>$date,
			'time'=>$time,
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
		$date= $this->input->post('date');
		$Subject=$this->input->post('Subject');
			
		
		$data = array(
			'date_notes'=>$date,
			'faculty_id'=>$this->session->userdata('facultyid'),
			'username'=>$this->session->userdata('user'),
			
			'subject_id' =>$Subject,
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
		
		$this->db->distinct('a.notes_id ');
		$this->db->select('a.*,b.first_name,b.last_name, c.subject_name');
		$this->db->where('a.faculty_id',$this->session->userdata('facultyid') );
		$this->db->from('upload_notes a');
		$this->db->join('faculty_personal b','a.faculty_id=b.faculty_id');
		$this->db->join('subject c','a.subject_id=c.subject_id');

		$q = $this->db->get();
		return $q->result();
		}



    function download_models2( )
		{
		$subjectid=$this->input->post('Subject');
		
		$this->db->distinct('a.notes_id');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subjectid );
		$this->db->from('upload_notes a');
		$q = $this->db->get();
		return $q->result();
		}


	function getSubject_download()
		{
			
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));

		$this->db->order_by('subject_id');
		$query = $this->db->get('subject a');
		//echo $this->db->last_query();die();
		return $query->result();
		}
		



	function notes_view()
	{
		$intel = array();
		$Subject = $this->input->post('Subject');

		$this->db->distinct('a.notes_id');
		$this->db->select('a.*,b.first_name,b.last_name, c.subject_name');
		$this->db->where('a.subject_id', $Subject);
		$this->db->from('upload_notes a');
		$this->db->join('faculty_personal b','a.faculty_id=b.faculty_id');
		$this->db->join('subject c','a.subject_id=c.subject_id');



		$q = $this->db->get();
		//echo $this->db->last_query();die();
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

		function reports_attendance_modals_data()
		{
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('Subject_Name');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_datastudent()
		{
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->from('std_personal a');
		$this->db->join('section b', 'a.student_id=b.student_id');
		$this->db->where('b.session_id', '2018');
		$this->db->where('b.session_class_id', $this->input->post('Class'));
		$query = $this->db->get();
		return $query->result();
		}
		function reports_attendance_modals_datastudent789()
		{
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->from('std_personal a');
		$this->db->join('section b', 'a.student_id=b.student_id');
		$this->db->where('b.session_id', '2018');
		$this->db->where('b.session_class_id', $this->input->post('Class_admin'));
		$query = $this->db->get();
		return $query->result();
		}
		function reports_attendance_modalsCA()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('subject_name');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('Class');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('Semester');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modalsCA789()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('subject_name_admin');
			$course_id=$this->input->post('Course_admin');
			$add_class_id=$this->input->post('Class_admin');
			$session_id=$this->input->post('Session_admin');
			$semseter_id=$this->input->post('Semester_admin');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function subjectCAT(){

		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.course_id',$this->session->userdata('cos'));
		$this->db->where('a.semester_id',$this->session->userdata('tan'));
		$query = $this->db->get('subject a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modalsCAT()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('Subject_Name');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('Class');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('Semester');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}

		function reports_attendance_modals_studentCA5()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('Subject_Name');
			$btn1= $this->input->post('d1');
				$btn2= $this->input->post('d2');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('b.session_id',$this->session->userdata('sin'));
    	$this->db->where('b.course_id',$this->session->userdata('cos'));
    	$this->db->where('b.semester_id',$this->session->userdata('tan'));
    	$this->db->where('b.section_id',$this->session->userdata('cot'));
    	$this->db->where('a.subject_id',$subject_id);
    	$this->db->where('a.student_id',$this->session->userdata('studentid'));
    	
    $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
			$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_studentCA6()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('Subject_Name');
			$btn1= $this->input->post('d1');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.date',$btn1);
		$this->db->where('a.subject_id',$subject_id);
    	$this->db->where('a.student_id',$this->session->userdata('studentid'));
    	$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->where('b.session_id',$this->session->userdata('sin'));
    	$this->db->where('b.course_id',$this->session->userdata('cos'));
    	$this->db->where('b.semester_id',$this->session->userdata('tan'));
    	$this->db->where('b.section_id',$this->session->userdata('cot'));
    	
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_data_day()
		{
			$btn1= $this->input->post('d1');
			$subject_id=$this->input->post('Subject_Name');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		$this->db->where('a.date',$btn1);
		$this->db->where('a.student_id', $this->session->userdata('studentid'));
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		//daywise
		function reports_attendance_modals_student_admin()
		{
		$consolidate= array();	
			$subject_id=$this->input->post('subject_name');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('Class');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('Semester');
			$btn1= $this->input->post('d1');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('a.date',$btn1);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
			
		}
		function reports_attendance_modals_data_day_admin1()
		{
		$btn1= $this->input->post('d1');
		$subject_id=$this->input->post('subject_name');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		$this->db->where('a.date',$btn1);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_datastudent_admin_day()
		{
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->from('std_personal a');
		$this->db->join('section b', 'a.student_id=b.student_id');
		$this->db->where('b.session_id', '2018');
		$this->db->where('b.session_class_id', $this->input->post('Class'));
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		
		return $query->result();
		}

				function reports_attendance_modals_data_admin()
		{
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('subject_name');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		 $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_data_admin789()
		{
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('subject_name_admin');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		 $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}

		function reports_attendance_modals_datastudentCA()
		{
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->from('std_personal a');
		
		$this->db->join('section b', 'a.student_id=b.student_id');

		$this->db->where('b.session_id',$this->session->userdata('sin'));
    	$this->db->where('b.student_id', $this->session->userdata('studentid'));
		$query = $this->db->get();
		
		//echo $this->db->last_query();die();
		return $query->result();
		}
		function reports_attendance_modals_student_total()
		{
			$consolidate= array();	
			$subject_id=$this->input->post('Subject_Name');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('b.session_id',$this->session->userdata('sin'));
    	$this->db->where('b.course_id',$this->session->userdata('cos'));
    	$this->db->where('b.semester_id',$this->session->userdata('tan'));
    	$this->db->where('b.section_id',$this->session->userdata('cot'));
    	$this->db->where('a.subject_id',$subject_id);
    	$this->db->where('a.student_id',$this->session->userdata('studentid'));
    	$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		//total_admin_report
		function reports_attendance_modals_student_total_admin_23()
		{
		$consolidate= array();	
			$subject_id=$this->input->post('subjectADT');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('ClassADT');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('Semester');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
		
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
			
		}
		function reports_attendance_modals_student_total_admin_23458()
		{
		$consolidate= array();	
			$subject_id=$this->input->post('subjectADT');
			$course_id=$this->input->post('Course');
			$add_class_id=$this->input->post('ClassADT');
			$session_id=$this->input->post('Session');
			$semseter_id=$this->input->post('Semester');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
		
		$this->db->distinct('a.date');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->select('sum(a.attendance_status) as TotalAttd1');
		
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->row();
			
		}
		function reports_attendance_modals_datastudent_admin_total_23()
		{
		$this->db->select('a.student_id, a.first_name, a.last_name');
		$this->db->from('std_personal a');
		$this->db->join('section b', 'a.student_id=b.student_id');
		$this->db->where('b.session_id', '2018');
		$this->db->where('b.session_class_id', $this->input->post('ClassADT'));////errror aaa rhe hai yaha par 
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		
		return $query->result();
		}


		function reports_attendance_modals_student_total_faculty_reports()
		{

		$consolidate= array();	
			$subject_id=$this->input->post('subject_id_total');
			$course_id=$this->input->post('course_id_total');
			$add_class_id=$this->input->post('add_class_id_total');
			$session_id=$this->input->post('session_id_total');
			$semseter_id=$this->input->post('semester_id_total');
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
		
		$this->db->distinct('a.date');
		$this->db->select('sum(a.attendance_status) as TotalAttd');
		$this->db->where('a.subject_id',$subject_id);
		$this->db->where('b.course_id',$course_id);
		$this->db->where('b.add_class_id',$add_class_id);
		$this->db->where('b.session_id',$session_id);
		$this->db->where('b.semester_id',$semseter_id);
		$this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->from('attendance a');
		$this->db->join(' add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join(' faculty_personal c', 'c.faculty_id=a.faculty_id');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->row();
			
		}
		function reports_attendance_modals_data_faculty_date_87()
		{
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('subject_id_total');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		 $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function reports_attendance_modals_data_faculty_student_details_87()
		{
			$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('subject_id_total');
			
		$this->db->distinct('a.student_id');
		$this->db->select('a.student_id');
		 $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}

		function subject_wise_data()
		{
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*');
		$this->db->where('a.course_id',$this->session->userdata('cos'));
    	$this->db->where('a.semester_id',$this->session->userdata('tan'));
    	$this->db->from(' subject a');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		function subject_wise_marks_id()
		{
		$this->db->distinct('a.subject_id');
		$this->db->select('a.*');
		$this->db->where('a.course_id',$this->session->userdata('cos'));
    	$this->db->where('a.semester_id',$this->session->userdata('tan'));
    	$this->db->from(' subject a');
		
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		
function reports_attendance_modals_data_admin_total_date_231()
{	$btn1= $this->input->post('d1');
			$btn2= $this->input->post('d2');
			$subject_id=$this->input->post('subjectADT');
			
		$this->db->distinct('a.date');
		$this->db->select('a.date');
		 $this->db->where('DATE(a.date) BETWEEN "'.$btn1.'" AND "'.$btn2.'"', '',false);
		$this->db->where('a.subject_id', $subject_id);
		$query = $this->db->get('attendance a');
		//echo $this->db->last_query();die();
		return $query->result();
		
		}
		
}
?>
