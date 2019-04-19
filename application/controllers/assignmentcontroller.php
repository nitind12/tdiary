<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Assignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('assignmentmodel','um');
		 $this->load->model('Add_class_model','am');
		$this->load->model('Givenassignmentmodel','gm');
		
	
	}
	
	  public function index()  
    {  
		 $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "Edit_Assignment";
        $data['page_'] = "view_class";
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage', $data);  
        $this->load->view('templates/footer');
    }
   
   
     public function assignment_edit_controller()  
    {   
    	if($this->input->post('addclassidA'))
            {
            $no_ = $this->input->post('addclassidA');
            $sess = $this->input->post('sessionidA');
        
    	$data['add_class_in']= $this->gm->add_view_class($no_);////ravi wALA SE
        $data['title'] = "assignment_edit";
        $data['page_'] = "assignmentview";
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }
    else{
    	redirect('Assignmentcontroller');
    }
	}
	

	function assignment_edit_controller_saving ()
	{
		$this->gm->assignment_edit_modal_saving();
		redirect('Assignmentcontroller');
	}
}