<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class facultyprofile1controller extends CI_Controller
{


	public function index()
	{
		
		$this->load->model('facultyprofilemodel');
		$a = $this->facultyprofilemodel->getData();
		
		$data['marks'] = $this->facultyprofilemodel->getData();
		
		$data['page_'] = 'facultyprofileview';
		$data['title'] = 'Given Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		

	}

	
}
?>