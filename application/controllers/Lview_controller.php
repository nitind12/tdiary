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
		$data['t_diary'] = $this->obj->fetchtable();
		 $data['title'] = "Lectureview page";
        $data['page_'] = "Lectureview";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	function savingdata()
	{
		$this->obj->savingdata();
		redirect('Edit_controller');
	}



    
}
?>