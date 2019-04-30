<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Student_reg_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('reg_model','um');
	}
function index()
	{
		
		 $data['page_'] = 'reg_view';
		 $data['title'] = 'Edit Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata34()
	{
		$this->um->savingdata34();
		redirect('login');
	}
}