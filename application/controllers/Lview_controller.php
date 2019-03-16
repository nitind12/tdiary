<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lview_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Lview_model','obj');		//calling model
	}

	function index()
	{
		$data['lecture_database'] = $this->obj->fetchtable();
		$this->load->view('Lectureview',$data);	
	}

	function savingdata()
	{
		$this->obj->savingdata();
		redirect('Edit_controller');
	}

}
?>