<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenttimetableeditcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();


         if(!$this->session->userdata('user')) redirect('Login_controller');
         
           $this->load->model('Add_class_model','am');
           $this->load->model('Studenttimetableeditmodel','im');

   
        
     
    }

    public function index()  
    {  
        $data['title'] = "Studenttimetableedit";
        $data['page_'] = "Studenttimetableedit";
        $data['course1'] = $this->im->getmarkstype4();
        $data['Semester1'] = $this->im->getmarkstype5();
        $data['Session1'] = $this->im->getmarkstype6();
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');
    }
   
    function uploadTT(){
        $this->load->model('Studenttimetableeditmodel', 'stem');
        $this->stem->savingTimeTable();
        redirect('Studenttimetableeditcontroller');
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
    }

    


}	
?>
