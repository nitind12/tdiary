<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonview_controller extends CI_Controller
{


	function index()
	{
	    $data['title'] = "Lessonview page";
        $data['page_'] = "Lessonview";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	function lessonview()
	{
		$this->load->model('Lessonview_model','object');
		$data['lm'] = $this->object->savingdata2();

		echo json_encode($data);	
	}
}
?>