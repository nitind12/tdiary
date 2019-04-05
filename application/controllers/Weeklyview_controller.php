<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyview_controller extends CI_Controller
{

	function index()
	{
		$data['title'] = "Weeklyview page";
        $data['page_'] = "Weeklyview";
        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	function lessonview()
	{
		$this->load->model('Weeklyview_model','object');
		$data['week'] = $this->object->savingdata2();

		echo json_encode($data);	
	}
}	
?>