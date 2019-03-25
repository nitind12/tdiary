<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonview_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Lessonview_model','obj');		//calling model
	}

	function index()
	{

		$data['tdiary_database'] = $this->obj->fetchtable();
	    $data['title'] = "Lessonview";
        $data['page_'] = "Lessonview";
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);  
        $this->load->view('templates/footer');	
	}

	function savingdata()
	{
		$this->obj->savingdata();
		redirect('Lessonedit_controller');
	}
}
?>