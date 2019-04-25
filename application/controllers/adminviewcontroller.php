<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminviewcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        
     
    }

    public function index()  
    {  
        $data['title'] = "Asminview";
        $data['page_'] = "Adminview";
        $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');
    }

    public function update()  
    {  
        $this->load->model('adminviewmodel', 'stem');
        $this->stem->savingTTable();
        redirect('Adminviewcontroller');  
  
    }  
}?>
