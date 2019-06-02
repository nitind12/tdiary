<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonview_controller extends CI_Controller
{
 function __construct()
	   {
        parent::__construct();

        if(!$this->session->userdata('user')) redirect('Login_controller');
        
        $this->load->model('Givenassignmentmodel','gm');
        
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('Add_class_model','am');
    }

	function index()
	{
	    $data['title'] = "Lesson_view ";
        $data['page_'] = "Lessonview_class";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        
        $data['cls_in_session'] = $this->am->fetchClass();
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	public function lesson_view_controller()  
    { 
        if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');
            $clsid = $this->input->post('courseidED');
             $subid = $this->input->post('subjectidED');


        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
            
         	$data['t_diary'] = $this->obj->fetchtable($no_,$subid);     
       		//$data['add_class_in']= $this->gm->add_view_class($no_);////ravi wALA SE
             $data['add_class_in'] = $this->am->add_view_attendance($no_);
            $data['title'] = "Lesson_plan";
            $data['page_'] = "lesson_view_set";
            $this->load->view('templates/header', $data);
            $this->load->view('mypreetipage', $data);  
           $this->load->view('templates/footer');
        }
        else
        {
            redirect('Lessonview_controller');
        }
    }
		
}
?>