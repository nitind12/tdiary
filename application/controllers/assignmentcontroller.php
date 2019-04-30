<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Assignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
		$this->load->model('assignmentmodel','um');
		 $this->load->model('Add_class_model','am');
		$this->load->model('Givenassignmentmodel','gm');
		
	
	}
	
	  public function index()  
    {  
		 $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "Edit_Assignment";
        $data['page_'] = "view_class";
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
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
        $data['users'] = $this->gm->fetchtable($no_);
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        
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



      function updatedColumn()
    {

        //$this->load->model('Lectureedit_model','lectup');
        $bool_= $this->gm->updatedColumn();

        echo $data; 
    }
}