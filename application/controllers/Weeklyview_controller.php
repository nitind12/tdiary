<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyview_controller extends CI_Controller
{

	function __construct()
	  {
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
        $this->load->model('Givenassignmentmodel','gm');
        
       $this->load->model('Weeklyedit_model','obj');
        $this->load->model('Add_class_model','am');
    }


	function index()
	{
		$data['title'] = "Weeklyview page";
        $data['page_'] = "Weeklyview_class";

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
        $data['cls_in_session'] = $this->am->fetchClass();
        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}


	function lessonview()
	{
		$this->load->model('Weeklyview_model','object');
		$data['week'] = $this->object->savingdata();

		echo json_encode($data);	
	}
}	
?>