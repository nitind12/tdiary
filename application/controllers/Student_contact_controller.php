<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Student_contact_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('contact_model','um');
	}
function index()
	{
		
		 $data['page_'] = 'contact_view';
		 $data['title'] = 'Edit Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata32()
	{
		$this->um->savingdata32();
		redirect('Academic_controller');
	}
}