<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Address_form_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('Address_model','um');
		 $this->load->model('Add_class_model','am');
	}
function index()
	{
		
		 $data['page_'] = 'address_view';
		 $data['title'] = 'Edit Assignment';
       
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata31()
	{
		$this->um->savingdata31();
		redirect('Student_contact_controller');
	}
}