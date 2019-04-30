<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class facultyprofile1controller extends CI_Controller
{	
	 function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('user')) redirect('Login_controller');


    }

	public function index()
	{
		
		$this->load->model('facultyprofilemodel');
		$a = $this->facultyprofilemodel->getData();
		
		$data['marks'] = $this->facultyprofilemodel->getData();
		
		$data['page_'] = 'facultyprofileview';
		$data['title'] = 'profile';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		

	}

	
}
?>