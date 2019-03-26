<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyedit_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
	    $data['title'] = "Weeklyedit";
        $data['page_'] = "Weeklyedit";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');	
	}



}
?>