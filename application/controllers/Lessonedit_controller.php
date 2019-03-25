<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonedit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
        
    }
    
	function index()
	{
	 	$data['title'] = "lessonedit";
        $data['page_'] = "lessonedit";
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard', $data);  
        $this->load->view('templates/footer');
	
	}


  /*  public function authenticate()  
    {  
        $this->load->model('Lessonview_model');  
  
        if ($this->Lessonview_model->filled_correctly())  
        {  
            redirect('lessonedit');
        } else {  
            redirect('Lessonedit_controller');  
        }  
    } 
    */
}?>