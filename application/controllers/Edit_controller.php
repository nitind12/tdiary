<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Edit_model','obj');		//calling model
	}

	function index()
	{
		$data['lecture_database'] = $this->obj->fetchtable();
		$this->load->view('Edit',$data);	
	}

	function savingdata()
	{
		$this->obj->savingdata();
		redirect('Edit_controller');
	}
	//function index()
	//{
		//$data['lecture_database'] = $this->obj->fetchtable();
	//	$this->load->view('New');
	//	$this->load->model('New_model','obj');
	//	$this->obj->savingdata();
	//	redirect('New_controller');

//	}

	/*function saving()
	{
		$this->obj->savingdata();
		redirect('New_controller');

	}*/
}	
?>
