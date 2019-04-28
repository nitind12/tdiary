<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Address_form_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('Address_model','um');
	}
function index()
	{
		
		 $data['page_'] = 'address_view';
		 $data['title'] = 'Edit Assignment';
       
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