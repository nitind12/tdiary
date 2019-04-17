<?php
class Update_Assignment_Controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Checkassignmentmodel','um');
		 $this->load->model('Add_class_model','am');
	}

	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
		$data['page_'] = 'update_assignmentviewdiv';
		$data['title'] = 'Check_View_Assignment';
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
	}

	public function view_assignment($no_,$sess) ////rename fecttab 
    {  
    	$data['vie'] = $this->um->view_given_assignment($no_,$sess);
    	$data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['title'] = "Check_view_Assignment";
        $data['page_'] = "update_assignmentview";  
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    	
       
    }

	
}