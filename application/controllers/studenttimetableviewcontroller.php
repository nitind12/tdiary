<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenttimetableviewcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        
     
    }

    public function index()  
    {  
        $data['title'] = "Studenttimetableview";
        $data['page_'] = "Studenttimetableview";
        $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');
    }

    public function update()  
    {  
        $this->load->model('Studenttimetableviewmodel', 'stem');
        $this->stem->savingTTable();
        redirect('Studenttimetableviewcontroller');  
  
    }  
}?>
