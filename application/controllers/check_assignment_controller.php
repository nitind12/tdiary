<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Check_Assignment_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('assignmentmodel','km');
		$this->load->model('Add_class_model','am');
		$this->load->model('checkassignmentmodel','um');
	}
	 public function index()  
    {  
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "View_Class_Check_Assignment";
        $data['page_'] = "view_class_check_assignment";
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage', $data);  
        $this->load->view('templates/footer');
    }

    public function check_assignment_marks_controller($no_,$sess)  
    {  
        $data['title'] = "check_assignment_student";
        $data['page_'] = "check_assignment_student";        
        $this->load->view('templates/header', $data);
        $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['add_attend'] = $this->am->add_attendance($sess, $no_);
         $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
        
    }

    function check_assignment_marks_enter()
	{
		$this->um->check_assignment_marks_enter_modal();
		redirect('Check_assignment_controller');
	}


	//-- double click and edit ----//

    function updatedColumn()
    {

        
        $bool_= $this->um->updatedColumn();

        echo $data; 
    }

	
}