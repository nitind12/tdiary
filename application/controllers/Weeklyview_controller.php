<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyview_controller extends CI_Controller
{
	function __construct()
	  {
        parent::__construct();
        $this->load->model('Givenassignmentmodel','gm');
        
       $this->load->model('Weeklyedit_model','obj');
        $this->load->model('Add_class_model','am');
    }

	function index()
	{
		$data['title'] = "Weeklyview page";
        $data['page_'] = "Weeklyview_class";

        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        
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