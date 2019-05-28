<?php
class Check_assign_report_controller extends CI_Controller{
	function __construct()
	{
        parent::__construct();
        $this->load->model('Givenassignmentmodel','gm');
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('check_assign_report_model','im');
		$this->load->model('Add_class_model','am');
		 if(!$this->session->userdata('user')) redirect('Login_controller');
    }
    public function index()
	{
		 $data['page_'] = 'check_assign_report_view';
		 $data['title'] = 'assign_report_view ';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['subject'] = $this->am->getstudentsubj();
      // $data['assignment_'] = $this->am->getAssiG();
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function assignment_report(){
		$data['marks'] = $this->im->assignment_report();
		echo json_encode($data);
	}





	public function marks1()
	{
		$this->load->model('check_assign_report_model','im');
		$data['marks_type'] = $this->im->getmarkstype();
		
		 $data['page_'] = 'check_marks1_report_view';
		 $data['title'] = 'marks_report_view ';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['Semester1'] = $this->am->getSemester1();
       $data['subject'] = $this->am->getstudentsubj();
        
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function marks1_report(){
		$data['marks'] = $this->im->marks1_report();

		echo json_encode($data);
	}
	function marks1_report2(){
		$data['marks'] = $this->im->marks1_report2();

		echo json_encode($data);
	}
}