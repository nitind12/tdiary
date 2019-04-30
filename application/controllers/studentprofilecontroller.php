<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentprofilecontroller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
     }


	public function index()
	{
		
		$this->load->model('studentprofilemodel');
		$a = $this->studentprofilemodel->getData();
		
		$data['marks'] = $this->studentprofilemodel->getData();
		
		$data['page_'] = 'studentprofileview';
		$data['title'] = 'profile';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		

	}

	
}
?>