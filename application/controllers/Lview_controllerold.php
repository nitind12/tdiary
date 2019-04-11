<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lview_controller extends CI_Controller
{

	function index()
	{
	    $data['title'] = "Lectureview page";
        $data['page_'] = "Lectureview";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}

	function lessonview()
	{
		$this->load->model('Lview_model','object');
		$data['lect_'] = $this->object->savingdata3();

		echo json_encode($data);	
	}


    
}
?>