<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminviewcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
           $this->load->model('Add_class_model','am');
        $this->load->model('Adminviewmodel','im');
        $this->load->model('Viewtimetablemodel','vm');
      
   
        
     
    }

    public function index()  
    {  
        $data['title'] = "Adminview";
        $data['page_'] = "Adminview";
         $data['das1'] = $this->vm->dashtimetable();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $data['course1'] = $this->im->getmarkstype();
        $data['Session1'] = $this->im->getmarkstype2();
         $data['Semester1'] = $this->im->getmarkstype1();
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
