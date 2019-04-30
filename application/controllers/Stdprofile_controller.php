<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Stdprofile_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		 if(!$this->session->userdata('user')) redirect('Login_controller');
		 
		$this->load->model('Registration_model','obj');
	
	}


	function index()
	{
		
		 $data['title'] = 'Student Profile';
		 $data['page_'] = 'Stdprofile';

		 $data['profile']=$this->obj->getprofile() ;
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		
	}

}?>