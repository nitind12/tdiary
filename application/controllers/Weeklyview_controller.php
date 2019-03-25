<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklyview_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
       
    }
    
	
	function index()
	{
		$data['title'] = "preeti";
        $data['page_'] = "Weeklyview";
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);  
        $this->load->view('templates/footer');
	
		
	}

}	
?>