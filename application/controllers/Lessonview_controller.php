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
		$data['lecture_database'] = $this->obj->fetchtable();
		$this->load->view('Lessonview',$data);	
	}

	function savingdata()
	{
		$this->obj->savingdata();
		redirect('Lessonedit_controller');
	}
}
?>