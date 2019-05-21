<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Registrationform_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('user')) redirect('Login_controller');
     
  		 $this->load->model('Add_class_model','am');
		$this->load->model('registration_model','um');
	}
	public function index1()
	{
		//$data['cls_in_session'] = $this->am->fetchClass();
		 $data['page_'] = 'Reg_div';
		 $data['title'] = 'View Marks';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
       $data['course1'] = $this->am->getCourse1();
        
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}




function index()
	{
		
		 $data['page_'] = 'registration_view';
		 $data['title'] = 'Edit Assignment';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['course1'] = $this->am->getCourse1();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $data['Ses'] = $this->am->getSession1();
       $data['board'] = $this->am->getboard();
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata3()
	{
		$this->um->savingdata3();
		redirect('Registrationform_controller','refresh');
	}
}