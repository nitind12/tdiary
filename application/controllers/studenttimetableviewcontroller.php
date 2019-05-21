<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenttimetableviewcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         

           $this->load->model('Add_class_model','am');
           $this->load->model('Studenttimetableviewmodel','im');

   
    
     
    }

    

    public function index()  
    {  
        $data['title'] = "Studenttimetableview";
        $data['page_'] = "Studenttimetableview";
        $data['course1'] = $this->im->getmarkstype();
        $data['Semester1'] = $this->im->getmarkstype1();
        $data['Session1'] = $this->im->getmarkstype2();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        $data['time1'] = $this->im-> fetchtable();
               $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');

    }

    public function update()  
    {  
        $this->load->model('Studenttimetableviewmodel', 'stem');
        $this->stem->savingTTable();
        redirect('studenttimetableviewcontroller/index'); 
       }  
}?>
