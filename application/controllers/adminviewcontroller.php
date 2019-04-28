<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminviewcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
           $this->load->model('Add_class_model','am');
   
        
     
    }

    public function index()  
    {  
        $data['title'] = "Asminview";
        $data['page_'] = "Adminview";
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');
    }

    public function update()  
    {  
        $this->load->model('adminviewmodel', 'stem');
        $this->stem->savingTTable();
        redirect('Adminviewcontroller'); 
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu(); 
  
    }  
}?>
