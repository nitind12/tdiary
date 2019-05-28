<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Check_Assignment_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('assignmentmodel','km');
		$this->load->model('Add_class_model','am');
		$this->load->model('checkassignmentmodel','um');
         if(!$this->session->userdata('user')) redirect('Login_controller');
	}
	 public function index()  
    {

        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "View_Class_Check_Assignment";
        $data['page_'] = "view_class_check_assignment";
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header', $data);
        $this->load->view('myrajpage', $data);  
        $this->load->view('templates/footer');
    }

    public function check_assignment_marks_controller()  
    {

       
       $data['marks_type'] = $this->um->getmarkstype();


       if($this->input->post('addclassidCA'))
        {

        $no_ = $this->input->post('addclassidCA');
        $sess = $this->input->post('sessionidCA');

        $data['title'] = "check_assignment_student";
        $data['page_'] = "check_assignment_student";        
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();

        $this->load->view('templates/header', $data);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['add_attend'] = $this->am->add_attendance($sess, $no_);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');


        }
        else
        {
            redirect('Check_assignment_controller');
            }
              
     }
    function check_assignment_marks_enter()
	{
		$this->um->check_assignment_marks_enter_modal();
		redirect('Check_assignment_controller');
	}
	
	
}