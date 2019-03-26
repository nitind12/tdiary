<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyview_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
       	$this->load->model('Weeklyview_model','obj');		//calling model
       
    }
    
	
	function index()
	{
		$data['tdiary_database'] = $this->obj->fetchtable();
		$data['title'] = "Weeklyview";
        $data['page_'] = "Weeklyview";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
	
	}

	function savingdata()
	{
		$this->obj->savingdata();	
		redirect('Weeklyedit_controller');
	}



}	
?>