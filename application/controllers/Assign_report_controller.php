<?php
class assign_report_controller extends CI_Controller{
	function __construct()
	{
        parent::__construct();
        $this->load->model('Givenassignmentmodel','gm');
       $this->load->model('Lessonedit_model','obj');
      $this->load->model('Add_class_model','am');
        $this->load->model('Assign_report_model','ar');
         if(!$this->session->userdata('user')) redirect('Login_controller');
    }
    function  get_subjects(){
        $data['subjects'] = $this->ar->getSubjectr();
        echo json_encode($data);
    }
    
    public function index()
	{
		 $data['page_'] = 'assign_report_view';
		 $data['title'] = 'assign_report_view ';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['Session1'] = $this->am->getSession1();
        $data['assignment_'] = $this->am->getAssiG();
       
        $data['Semester1'] = $this->am->getSemester1();
        $data['subject'] = $this->am->getstudentsubj();
        
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function assignment_report(){
		$this->load->model('Assign_report_model','im');
		$data['marks'] = $this->im->assignment_report();

		echo json_encode($data);
	}
}