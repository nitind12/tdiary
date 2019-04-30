<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Academic_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('academic_model','um');
	}
function index()
	{
		
		 $data['page_'] = 'academic_view';
		 $data['title'] = 'Edit Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		
		

	}
	function savingdata33()
	{
		$this->um->savingdata33();
		redirect('Student_reg_controller');
	}
}